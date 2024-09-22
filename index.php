<?php

// Get current URL and parameters for correct pagination $protocol=$_SERVER['SERVER_PROTOCOL'];
$domain = $_SERVER['HTTP_HOST'];
$script = $_SERVER['SCRIPT_NAME'];
$parameters = $_SERVER['QUERY_STRING'];
$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === FALSE ? 'http' : 'https';
$currenturl = $protocol . '://' . $domain . $script . '?' . $parameters;
$new_url = preg_replace(
    '/&?pageno=[^&]*/',
    '',
    $currenturl
);
$site_name = 'Payup Francesca | You Owe Kelvin $1593';
$site_url = $protocol . '://' . $domain;
$base_url = '/payupfrancesca';
$today = date('Y-m-d');
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>

    <!-- Core scripts -->
    <script src="<?php echo $base_url; ?>/assets/js/color-modes.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kelvin">
    <title>Payup Francesca | You Owe Kelvin $1593</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


    <style>
        body {
            font-family: "Noto Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
        }
    </style>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <link rel="icon" href="assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <!-- Custom CSS -->
    <link href="<?php echo $base_url; ?>/assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/css/carousel.css" rel="stylesheet">

    <!-- Google reCAPTCHA -->
    <script
        src="https://www.google.com/recaptcha/enterprise.js?render=6LcxXEcqAAAAALTnc0Jrar1GregrFqZdDFxGXyUw"></script>
</head>

<body class="d-flex flex-column h-100 overflow-auto py-0">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <!-- Navbar -->
    <header data-bs-theme="auto">
        <nav id="navbar" class="navbar navbar-expand-md fixed-top">
            <div class="container-fluid py-2">
                <a class="navbar-brand plain-link fw-bold" href="">
                    <img src="assets/img/francesca.png" alt="Profile picture" width="35" height="35"
                        class="rounded-circle border border-primary border-2">
                    PayUpFrancesca
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-auto-close="outside"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item"></li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">

                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#about-me">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#the-scam">The Scam</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#evidence">Evidence</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <span class="d-flex justify-content-between align-items-center">
                        <a class="btn btn-outline-auto mb-3 me-3" href="https://kelvin.sentiadigital.com"
                            target="_blank">
                            <i class="bi bi-kanban"></i> My Portfolio
                        </a>
                        <!-- Dark theme toggle -->

                        <div class="dropdown mb-3 me-3 bd-mode-toggle">
                            <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
                                id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown"
                                aria-label="Toggle theme (auto)">
                                <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                                    <use href="#circle-half"></use>
                                </svg>
                                <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="light" aria-pressed="false">
                                        <svg class="bi me-2 opacity-50" width="1em" height="1em">
                                            <use href="#sun-fill"></use>
                                        </svg>
                                        Light
                                        <svg class="bi ms-auto d-none" width="1em" height="1em">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="dark" aria-pressed="false">
                                        <svg class="bi me-2 opacity-50" width="1em" height="1em">
                                            <use href="#moon-stars-fill"></use>
                                        </svg>
                                        Dark
                                        <svg class="bi ms-auto d-none" width="1em" height="1em">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center active"
                                        data-bs-theme-value="auto" aria-pressed="true">
                                        <svg class="bi me-2 opacity-50" width="1em" height="1em">
                                            <use href="#circle-half"></use>
                                        </svg>
                                        Auto
                                        <svg class="bi ms-auto d-none" width="1em" height="1em">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </span>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <?php
        include 'page.php';
        ?>
    </main>



    <!-- scripts -->

    <script>
        function scrollFunction() {
            const navbar = document.getElementById('navbar');

            // Show shadow and border on scroll
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                navbar.classList.add('shadow-sm');
                navbar.classList.add('border-bottom');
            } else {
                navbar.classList.remove('shadow-sm');
                navbar.classList.remove('border-bottom');
            }

            // Set navbar background color based on the theme
            setNavbarBackgroundColor();
        }

        // Update navbar background based on the theme passed
        function setNavbarBackgroundColor(theme = null) {
            const currentTheme = theme || document.documentElement.getAttribute('data-bs-theme');
            const navbar = document.getElementById('navbar');

            // Clear previous classes
            navbar.classList.remove('bg-white', 'bg-dark');

            if (currentTheme === 'dark') {
                navbar.classList.add('bg-dark'); // Apply dark background
            } else if (currentTheme === 'light') {
                navbar.classList.add('bg-white'); // Apply light background
            } else {
                navbar.style.backgroundColor = ''; // Reset for 'auto' theme
            }
        }

        // Clear form inputs
        function clearInputs() {
            var inputsCollection = document.getElementsByClassName("form-inputs");
            for (i = 0; i < inputsCollection.length; i++) {
                inputsCollection[i].value = "";
            }
        }

        /**
         * Handle Evidence Links
         **/

        document.addEventListener("DOMContentLoaded", () => {

            setNavbarBackgroundColor(); // No parameter, defaults to current theme

            // Trigger background color change on theme change
            document.querySelectorAll('[data-bs-theme-value]').forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const theme = toggle.getAttribute('data-bs-theme-value');
                    setNavbarBackgroundColor(theme); // Pass the selected theme
                });
            });

            // Show navbar border and set background color on scroll
            window.onscroll = () => { scrollFunction(); };

            const wrappers = document.getElementsByClassName("sheet-wrapper");
            // Convert HTMLCollection to Array and iterate
            Array.from(wrappers).forEach((wrapper) => {

                // Check if iframe exists within the wrapper
                const iframe = wrapper.getElementsByTagName("iframe")[0];
                if (iframe) {
                    const url = iframe.getAttribute("src");

                    // Check if URL is retrieved correctly
                    if (url) {
                        wrapper.onclick = () => {
                            console.log(url);  // Log the URL to the console
                            window.location.href = url;  // Redirect to the URL
                        };
                    } else {
                        console.error('No src attribute found on iframe');
                    }
                } else {
                    console.error('No iframe found in wrapper');
                }
            });

            /**
             * Handle Contact Form
             */

            const sendMessageWrapper = document.getElementById("sendMessageWrapper");
            const sendInfo = {};

            const submitButton = document.getElementById("submit");

            submitButton.addEventListener("click", (event) => {
                event.preventDefault(); // Prevent default form submission

                // Show spinner
                submitButton.disabled = true;
                document.querySelector("#spinner").style.display = "block";
                document.querySelector("#send-button-text").innerHTML = '';

                // Get the values of all input and textarea elements
                const sendInfo = {};
                sendMessageWrapper.querySelectorAll("input, textarea").forEach((element) => {
                    sendInfo[element.id] = element.value;
                });

                sendInfo.submit = true;

                // Remove existing validation feedback
                sendMessageWrapper.querySelectorAll(".invalid-feedback").forEach(tooltip => {
                    tooltip.style.display = "none";
                });
                sendMessageWrapper.querySelectorAll(".is-invalid").forEach(input => {
                    input.classList.remove("is-invalid");
                });

                // Execute reCAPTCHA and get the token
                grecaptcha.enterprise.ready(async () => {

                    const token = await grecaptcha.enterprise.execute('6LcxXEcqAAAAALTnc0Jrar1GregrFqZdDFxGXyUw', { action: 'submit' });

                    // Add the token to the sendInfo object
                    sendInfo.recaptchaToken = token;

                    // Send the sendInfo object using POST to /contact as JSON
                    fetch("contact/", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify(sendInfo)
                    })
                        .then(response => response.json())
                        .then(data => {
                            // Hide spinner
                            submitButton.disabled = false;
                            document.querySelector("#spinner").style.display = "none";
                            document.querySelector("#send-button-text").innerHTML = 'Send';

                            if (data.status === "FAILED") {
                                if (data.required_inputs) {
                                    data.required_inputs.forEach(field => {
                                        const inputElement = document.getElementById(field);
                                        const tooltip = inputElement.nextElementSibling;
                                        inputElement.classList.add("is-invalid");
                                        tooltip.style.display = "block";
                                    });
                                    showToastMessage("Oops, that didn't work. Please see the form for errors.", "danger");
                                } else {
                                    showToastMessage(data.message, "danger");
                                }
                            } else {
                                // clearInputs();
                                showToastMessage("Message submitted successfully.", "success");
                            }
                        })
                        .catch(error => {
                            console.error("Error:", error);
                            // Hide spinner
                            submitButton.disabled = false;
                            document.querySelector("#spinner").style.display = "none";
                            document.querySelector("#send-button-text").innerHTML = 'Send';
                        });
                });
            });


            const saveToLocalStorage = (id, value) => {
                localStorage.setItem(id, value);
            };

            // LocalStorage for input fields
            sendMessageWrapper.querySelectorAll("input, textarea").forEach((input) => {
                input.addEventListener("input", () => {
                    saveToLocalStorage(input.id, input.value);
                });

                // Load from localStorage on page load
                const storedValue = localStorage.getItem(input.id);
                if (storedValue !== null) {
                    input.value = storedValue;
                }
            });


            /**
             * Handle Toast Messages
             */

            const toastMessageCmpnt = document.getElementById("toastMessageCmpnt");
            const liveToast = document.getElementById("liveToast");
            const toast = new bootstrap.Toast(liveToast);

            function showToastMessage(message, bgcolor) {
                let textcolor;
                switch (bgcolor) {
                    case "danger":
                        bgcolor = "#dc3545";
                        break;
                    case "primary":
                        bgcolor = "#7434fc";
                        break;
                    case "success":
                        bgcolor = "#198754";
                        break;
                    case "warning":
                        bgcolor = "#ffc107";
                        textcolor = "#000";
                        break;
                    case "teal":
                        bgcolor = "#20c997";
                        break;
                    default:
                        bgcolor = "#0d6efd";
                }

                liveToast.style.backgroundColor = bgcolor;
                liveToast.style.color = textcolor;
                toastMessageCmpnt.innerHTML = message;
                toast.show();
            }

        });
    </script>

    <!--
    /*****************
     DEV START
     */
    -->

    <?php
    // require_once 'vendor/php-hot-reloader/src/HotReloader.php';
    // new HotReloader\HotReloader('//localhost/payupfrancesca/vendor/php-hot-reloader/phrwatcher.php');
    ?>

    <!-- Save Main contenteditable changes on the browser to page.php -->
    <script type="text/javascript">

        // document.addEventListener('DOMContentLoaded', () => {
        //     const main = document.querySelector('main');
        //     const sendInfo = {};

        //     // List of events to bind
        //     const events = ['blur', 'keyup', 'keydown', 'paste', 'input'];

        //     // Function to save content
        //     const saveContent = () => {
        //         const mainContent = main.innerHTML;
        //         sendInfo.content = mainContent;
        //         saveToFile(sendInfo, 'page.php');
        //     };

        //     // Debounce function to limit the rate of saving content
        //     const debounce = (func, delay) => {
        //         let timeout;
        //         return (...args) => {
        //             clearTimeout(timeout);
        //             timeout = setTimeout(() => func.apply(this, args), delay);
        //         };
        //     };

        //     // Debounced saveContent function with a delay of 2 seconds (2000 ms)
        //     const debouncedSaveContent = debounce(saveContent, 2000);

        //     // Bind events to the contenteditable element
        //     events.forEach(event => {
        //         main.addEventListener(event, debouncedSaveContent);
        //     });

        //     // Function to save content to a file
        //     function saveToFile(content, filename) {
        //         fetch("save_page.php", {
        //             method: "POST",
        //             headers: {
        //                 "Content-Type": "application/json"
        //             },
        //             body: JSON.stringify(content)
        //         })
        //             .then(response => response.json())
        //             .then(data => {
        //                 if (data.status == "success") {
        //                     console.log("Saved successfully.");
        //                 } else {
        //                     alert("Error saving content.");
        //                 }
        //             })
        //             .catch(error => {
        //                 console.error("Error:", error);
        //             });
        //     }
        // });

    </script>

    <!--
     /*****************
     END DEV
      */
    -->

    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- scripts -->

</body>

</html>