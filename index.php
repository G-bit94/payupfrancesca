<?php

//Get current URL and parameters for correct pagination $protocol=$_SERVER['SERVER_PROTOCOL'];
$domain = $_SERVER['HTTP_HOST'];
$script = $_SERVER['SCRIPT_NAME'];
$parameters = $_SERVER['QUERY_STRING'];
$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === FALSE ? 'http' : 'https';
$currenturl = $protocol . '://' . $domain . $script . '?' . $parameters;
$new_url = preg_replace(
    '/&?pageno=[^&]*/',
    ''
    ,
    $currenturl
);
$site_name = "Payup Francesca | You Owe Kelvin $1593";
$site_url = $protocol . "://" . $domain;
$base_url = "/payupfrancesca";
$today = date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>

    <!-- Core scripts -->
    <script src="<?php echo $base_url; ?>/assets/js/color-modes.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kelvin">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Payup Francesca | You Owe Kelvin $1593</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
</head>

<body class="d-flex flex-column h-100">
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

    <!-- Dark theme toggle -->

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
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
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
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
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
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


    <!-- Navbar -->
    <header data-bs-theme="dark">
        <nav id="navbar" class="navbar navbar-expand-md navbar-light fixed-top bg-white">
            <div class="container-fluid py-2">
                <a class="navbar-brand plain-link text-dark fw-bold" href="">
                    <img src="assets/img/francesca.png" alt="Profile picture" width="35" height="35"
                        class="rounded-circle border border-primary border-2">
                    PayUpFrancesca
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item"></li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">

                        <li class="nav-item">
                            <a class="nav-link text-dark fw-bold" href="#about-me">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-bold" href="#the-scam">The Scam</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-bold" href="#evidence">Evidence</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-bold" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <span>
                        <a class="btn btn-outline-dark btn-light" href="#portfolio">
                            <i class="bi bi-kanban"></i> My Portfolio
                        </a>
                    </span>
                </div>
            </div>
        </nav>
    </header>

    <main contenteditable>
        <?php
        include "page.php";
        ?>
    </main>



    <!-- scripts -->

    <!--
    /*****************
     DEV
     */
    -->
    <?php
    require_once "vendor/php-hot-reloader/src/HotReloader.php";
    new HotReloader\HotReloader('//localhost/payupfrancesca/vendor/php-hot-reloader/phrwatcher.php');
    ?>

    <!-- Save Main contenteditable changes on the browser to page.php -->
    <script type="text/javascript">

        document.addEventListener('DOMContentLoaded', () => {
            const main = document.querySelector('main');
            const sendInfo = {};

            // List of events to bind
            const events = ['blur', 'keyup', 'keydown', 'paste', 'input'];

            // Function to save content
            const saveContent = () => {
                const mainContent = main.innerHTML;
                sendInfo.content = mainContent;
                saveToFile(sendInfo, 'page.php');
            };

            // Debounce function to limit the rate of saving content
            const debounce = (func, delay) => {
                let timeout;
                return (...args) => {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(this, args), delay);
                };
            };

            // Debounced saveContent function with a delay of 2 seconds (2000 ms)
            const debouncedSaveContent = debounce(saveContent, 2000);

            // Bind events to the contenteditable element
            events.forEach(event => {
                main.addEventListener(event, debouncedSaveContent);
            });

            // Function to save content to a file
            function saveToFile(content, filename) {
                fetch("save_page.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(content)
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status == "success") {
                            console.log("Saved successfully.");
                        } else {
                            alert("Error saving content.");
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
            }
        });

    </script>

    <!--
     /*****************
     END DEV
      */
    -->

    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- scripts -->

</body>

</html>