<?php

date_default_timezone_set('Africa/Nairobi');

error_reporting(error_level: 0);

// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '../vendor/autoload.php';

$response = [];

// Your reCAPTCHA secret key
$recaptchaSecretKey = getenv('RECAPTCHA_SECRET_KEY');

// Function to validate reCAPTCHA token
function validateRecaptcha($recaptchaSecretKey, $recaptchaToken)
{
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $recaptchaSecretKey,
        'response' => $recaptchaToken
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $verifyResponse = file_get_contents($url, false, $context);
    return json_decode($verifyResponse);
}

// Truncate subject by words
function truncStringToNrstWord($phrase, $max_words)
{
    $phrase_array = explode(' ', $phrase);
    if (count($phrase_array) > $max_words && $max_words > 0) {
        $phrase = implode(' ', array_slice($phrase_array, 0, $max_words)) . '...';
    }
    return $phrase;
}

// Disposable email check
function isTempEmail($email): bool
{
    $url = "https://disposable.debounce.io/?email=" . $email;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_TIMEOUT, 39); //Timeout in seconds        
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $curl_response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        global $response;
        $response['status'] = "cURL Error #:" . $err;
        return false;
    } else {
        $result = json_decode($curl_response)->disposable;
        return $result !== "false";
    }
}

// Validate email format
function isValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_POST = json_decode(file_get_contents('php://input'), true);

    // Initialize variables
    $prospectName = htmlspecialchars(strip_tags(trim($_POST['prospectName'] ?? '')));
    $prospectPhone = htmlspecialchars(strip_tags(trim($_POST['prospectPhone'] ?? '')));
    $prospectEmail = filter_var(trim($_POST['prospectEmail'] ?? ''), FILTER_SANITIZE_EMAIL);
    $prospectMessage = htmlspecialchars(strip_tags(trim($_POST['prospectMessage'] ?? '')));
    $recaptchaToken = $_POST['recaptchaToken'] ?? null;

    // Validate reCAPTCHA token
    $recaptchaResponse = validateRecaptcha($recaptchaSecretKey, $recaptchaToken);

    // Check reCAPTCHA success and score
    if (!$recaptchaResponse->success || $recaptchaResponse->score < 0.6) {
        echo json_encode(['status' => 'FAILED', 'message' => 'reCAPTCHA validation failed.']);
        exit;
    }

    // Check for required fields
    $required_fields = ['prospectName', 'prospectPhone', 'prospectEmail', 'prospectMessage'];
    $missing_fields = [];

    foreach ($required_fields as $field) {
        // Check if the field is empty
        if (empty($$field)) {
            $missing_fields[] = $field;
        }

        // Additional check for 'prospectEmail' only if it's not already missing, then email validation
        if ($field == 'prospectEmail' && (!in_array('prospectEmail', $missing_fields))) {
            if (!isValidEmail($prospectEmail) || isTempEmail($prospectEmail)) {
                $missing_fields[] = 'prospectEmail';
            }
        }
    }


    // If there are missing required fields, send a JSON response
    if (!empty($missing_fields)) {
        echo json_encode(['status' => 'FAILED', 'required_inputs' => $missing_fields]);
        exit;
    }

    // Prepare email
    $mail = new PHPMailer(true); // Passing `true` enables exceptions
    $truncatedSubject = truncStringToNrstWord($prospectMessage, 8);
    $replyURL = 'mailto:' . $prospectEmail . '?subject=' . $truncatedSubject;
    include "template.php";
    $mailHTML = $mail->Body;

    // Handle submit request
    if (isset($_POST["submit"]) && $_POST["submit"] == true) {
        try {
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            $mail->Username = getenv('SMTP_USERNAME');
            $mail->Password = getenv('SMTP_PASSWORD');
            $mail->setFrom($prospectEmail, $prospectName . " via PayUpFrancesca");
            $mail->addAddress(getenv('SMTP_MAIL_ADDRESS'));
            $mail->Subject = "New Message From Prospect On PayUpFrancesca";
            $mail->isHTML(true);
            $mail->Body = $mailHTML;

            if ($mail->send()) {
                $response["status"] = "SUCCESS";
            } else {
                $response["status"] = "FAILED";
            }
        } catch (Exception $e) {
            $response["status"] = "FAILED";
            $response["error"] = $e->getMessage();
        }
    }

    echo json_encode($response);
}
