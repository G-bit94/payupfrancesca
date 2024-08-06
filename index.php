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
require_once "vendor/php-hot-reloader/src/HotReloader.php";
new HotReloader\HotReloader('//localhost/payupfrancesca/vendor/php-hot-reloader/phrwatcher.php');

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

    <main>

        <div class="px-4 pt-5 my-5 text-center">
            <h1 class="display-4 fw-bold text-body-emphasis">A Story of Unpaid Work | Exposing Francesca DelGuidice
                as a
                Scammer</h1>
            <div class="col-lg-9 mx-auto">
                <p class="lead mb-4 my-5">Hi! This website exposes Francesca DelGuidice for her subterfuge, deceit
                    and
                    shameless exploitation of people she's hired before. I'm on a mission to let the whole world
                    know
                    what a despicable and vile person she is
                    as this is the only way to get retribution when exploited by such a remorseless and malicious
                    person. I believe sharing my experience
                    will help others steer clear of Francesca and people like her.</p>
                <a href="#the-scam" class="btn btn-primary mt-3">Dive straight to details about the scam</a>
            </div>
        </div>

        <!-- About Me -->

        <div class="container" id="about-me">

            <h2> <i class="bi bi-person-circle"></i> About Me </h2>

            <hr class="p-2">

            <div class="row">
                <div class="col-md-5">
                    <!-- <h2 class="featurette-heading fw-normal lh-1">About Me. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p> -->
                    <div class="col d-flex justify-content-center align-items-center p-5">
                        <img src="assets/img/kelvin.jpg" alt="Profile picture" width="200" height="200"
                            class="profile-picture rounded-circle border border-dark-75 border-5">
                    </div>
                </div>
                <div class="col">
                    <p class="lead text-start fs-6">
                        Howdy! I'm Kelvin, a hard worker who takes pride in what I do and believes in doing the
                        right
                        thing in all my dealings. As a freelancer, I've always gone the extra mile to deliver
                        top-notch
                        work to my clients, putting in my best efforts and dedicating my time to make sure they're
                        happy
                        with the results. I'm all about open communication, transparency, and mutual respect when it
                        comes to professional relationships.<br><br>

                        While on the hunt for freelance gigs, I stumbled upon a subreddit called r/SlaveLabour,
                        where I
                        connected with Francesca. Little did I know that she would take the name of the subreddit
                        way
                        too seriously (and literally), turning our professional partnership into a total nightmare.
                        Even
                        though I held
                        up my end of the bargain and put in three months of my time and energy, I've been left high
                        and
                        dry, without a dime to show for my hard work.<br><br>

                        As someone who values hard work and fairness, it's really messed up to find myself in this
                        situation. I've bent over backwards trying to sort things out with Francesca, reaching out
                        to
                        her time and time again over the past year, only to be met with complete radio silence and
                        indifference. The total lack of communication and unwillingness to address the situation has
                        left me feeling frustrated, disrespected, and totally taken advantage of.
                    </p>
                    <h5 class="lead bd-callout">That's why I can't take this lying down. </h5>
                </div>
            </div>
        </div>

        <!-- Francesca -->

        <div class="container" id="francesca">

            <hr class="py-3">

            <div class="row">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">And who's Francesca? <span
                            class="text-body-secondary">Well, where do I even start?</span></h2>
                    <p class="lh-1 pt-3 pt-1 fs-5">I don't have many good things to say about Francesca as a person,
                        if
                        at all.</p>
                    <p class="lead mb-3 text-start fs-5">
                        Based on limited interactions and observations however, a few things seem clear about
                        Francesca.
                        Francesca presented herself online as a savvy businesswoman with various entrepreneurial
                        ventures. <br><br>
                        She exuded legitimacy, ensuring potential freelancers felt comfortable working with her. Yet
                        beneath this polished exterior, no doubt lacked integrity and honesty. Her true character
                        was
                        one of deception and exploitation.
                    </p>
                </div>
                <div class="col-md-5">
                    <div class="card card-cover h-100 overflow-hidden text-bg-danger rounded-4 shadow-lg">
                        <div class="card-header bg-danger shadow-lg p-2">
                            <span class="d-flex justify-content-center">
                                <i class="bi bi-exclamation-triangle display-2 m-1"></i>
                            </span>
                        </div>
                        <!-- <div class="ribbon ribbon-top-right">
                            <span class="d-flex justify-content-around">
                                <i class="bi bi-radioactive text-dark fs-2"></i>
                                <i class="bi bi-fire text-dark fs-2"></i>
                            </span>
                        </div> -->
                        <img src="<?php echo $base_url; ?>/assets/img/francesca-square.png"
                            class="zoom d-block mx-lg-auto img-fluid" alt="Francesca" width="700" height="480"
                            loading="lazy">
                        <div class="d-flex flex-column h-100 p-3 text-center text-shadow-1">
                            <h4 class="p-2 lh-1 fw-bold">Francesca DelGuidice</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- The Scam -->

        <div class="container px-4 py-5" id="the-scam">
            <h2 class="display-4 fw-bold text-body-emphasis pb-2 border-bottom">
                <i class="bi bi-currency-dollar"></i> The Scam
            </h2>

            <div class="row g-5">
                <div class="col-md-8">
                    <h3 class="py-3 my-3 fst-italic border-bottom">
                        <i class="bi bi-quote display-6"
                            style="display: inline-block; transform: translateY(-10px);"></i>It's now clear as day
                        she
                        had intention of paying up — it was a long con.<i class="bi bi-quote display-6"
                            style="display: inline-block; transform:rotate(180deg) translateY(10px);"></i>
                    </h3>

                    <article class="blog-post">
                        <h2 class="display-5 link-body-emphasis mb-1">r/SlaveLabour</h2>
                        <p class="blog-post-meta">March 31, 2024 by <a href="#">Kelvin</a></p>

                        <p>I stumbled upon this subreddit called r/SlaveLabour in April 2022,
                            a
                            subreddit where people post all kinds of gigs they need help with, while hunting for
                            freelance work. It was there that I first encountered Francesca. I had posted an ad of
                            sorts
                            saying that I was ready to take up any "techie" gigs that aligned with my skills and
                            experience. I was
                            was for work as a web dev, content writer/editor, SEO, social media manager, graphic
                            designer... anything to help
                            me stay afloat. Francesca happened to be among the people who reached out following the
                            listing and
                            eager to take on put something on the table, I quickly accepted her offer of work. I
                            remember being elated that my days of strife and anguish were soon to be over.</p>
                        <hr>
                        <p>After some brief chat on Reddit and later WhatsApp, Francesca and I agreed upon the scope
                            of
                            work, timeline, and compensation for the different projects I'd be undertaking. I was to
                            dedicate three months of my time to complete the tasks assigned to me, and in return,
                            Francesca committed to providing fair remuneration for my efforts. With the terms
                            clearly outlined and both parties in agreement,
                            I enthusiastically began working on Yupvoted, her first project.</p>
                        <h2>The Work</h2>
                        <p>Throughout the three months, I poured my heart and soul into the work, ensuring that
                            every
                            aspect was handled with meticulous care. I regularly communicated
                            with Francesca, providing updates on my progress and seeking any necessary
                            clarifications or
                            feedback. Francesca seemed satisfied with my work, and I had no reason to suspect that
                            anything was amiss.</p>
                        <blockquote class="blockquote">
                            <p>"I poured my heart and soul into the work, ensuring that every aspect was handled
                                with
                                meticulous care and attention to detail."</p>
                        </blockquote>
                        <p>However, as the work (Yupvoted alongside a few other projects I'd picked up
                            <a
                                href="https://docs.google.com/spreadsheets/d/1NQ06jl0EMYZbuKCtz_DdFZeL9ctnso3cpjJwuPZpXnI/view">
                                as my Timesheet shows</a>) drew to a close and payment time approached, Francesca's
                            demeanor
                            shifted in a troubling way. Suddenly, getting hold of her turned into a frustrating game
                            of
                            hide-and-seek. Whenever I brought up the money I was owed, I was met with either vague,
                            evasive responses or deafening silence. I tried to remain patient and understanding,
                            giving
                            Francesca the benefit of the doubt and ample time to resolve the issue.
                        </p>
                        <h3>The Betrayal</h3>
                        <p>Days turned into weeks and weeks turned into months as I found myself living on a prayer,
                            desperately clinging to the hope that Francesca would finally come through. Needless to
                            say,
                            the payment never materialized. I continued to reach out to Francesca, politely
                            reminding
                            her of our agreement and requesting an update on when I could expect to receive my
                            compensation. My emails were met with deafening silence, and it became increasingly
                            apparent
                            that Francesca had no intention of honoring her end of the bargain.</p>
                        <p>The radio silence and total disregard for my efforts left me feeling betrayed and taken
                            for a
                            ride.</p>
                        <ul>
                            <li>Francesca's communication became sporadic</li>
                            <li>Payment never materialized despite multiple follow-ups</li>
                            <li>Francesca displayed no intention of honoring the agreement</li>
                        </ul>
                        <p>As the months passed, my frustration and disappointment grew. I had dedicated a
                            significant
                            portion of my time and energy to the project, trusting that Francesca would uphold her
                            commitment to fair compensation.</p>
                    </article>

                    <article class="blog-post">
                        <h2 class="display-5 link-body-emphasis mb-1">Stephanie and Colin</h2>
                        <p>As the situation with Francesca dragged on, I sent her a strongly worded email,
                            expressing my
                            frustration and demanding resolution. </p>
                        <img src="<?php echo $base_url; ?>/assets/img/strongly-worded-email.png"
                            class="zoom d-block mx-lg-auto img-fluid" alt="Email screenshot" width="700" height="480"
                            loading="lazy">
                        <p>To my surprise, I received a response from Stephanie, Francesca's cousin (or so she
                            claimed),
                            who acknowledged the issue and promised to look into it.</p>
                        <img src="<?php echo $base_url; ?>/assets/img/stephanie.png"
                            class="zoom d-block mx-lg-auto img-fluid" alt="Email from Stephanie" width="700"
                            height="480" loading="lazy">
                        <p>It was curious that Stephanie appeared to distort my communication, implying I had merely
                            requested a response from Francesca by the 30th of June, whereas my message had clearly
                            stipulated an expectation of receiving full or partial compensation by that date.</p>
                        <p>And just like Francesca, Stephanie's communication abruptly ceased, leaving me in the
                            lurch
                            once more.</p>
                        <p>In a last-ditch attempt to get things sorted out, I finally decided to reach out to
                            Colin,
                            Francesca's husband, hoping he might intervene and help mediate the situation. I
                            explained
                            the entire ordeal to him, emphasizing the hardship and frustration I had endured due to
                            the
                            unpaid work.</p>
                        <img src="<?php echo $base_url; ?>/assets/img/colin.png"
                            class="zoom d-block mx-lg-auto img-fluid" alt="Email to Colin" width="700" height="480"
                            loading="lazy">

                        <blockquote class="blockquote">
                            <p>"Desperate for a resolution, I decided to reach out to Colin, Francesca's husband,
                                hoping
                                he might intervene and help mediate the situation."</p>
                        </blockquote>

                        <p>While I knew it was a long shot, I hoped that involving Colin might finally lead to a
                            breakthrough in this nightmare.</p>

                        <p>As I continue waiting for a response from Colin, 5 months now and counting, I can't help
                            but
                            reflect on the emotional toll this experience has taken on me. The sense of betrayal and
                            disrespect is overwhelming, and the financial strain has been a constant source of
                            stress. I
                            remain determined to pursue every avenue available to me, including legal action if
                            necessary, to ensure that my rights are protected and that I receive the compensation I
                            rightfully earned.</p>
                    </article>


                    <article class="blog-post">
                        <h2 class="display-5 link-body-emphasis mb-1">The Aftermath</h2>
                        <p>It has now been nearly 1.5 years since the completion of the project, and I am still
                            waiting
                            for the payment that I rightfully earned. The financial impact of this scam has been
                            significant, as I had relied on the promised compensation to cover my living expenses
                            and
                            invest in my freelance career. She especially had me living on a prayer for the first 3
                            months.</p>
                        <p>Looking back, it's plain as day that Francesca's intentions were never to engage in a
                            fair
                            and professional collaboration. Instead, she exploited the trust and goodwill of
                            freelancers
                            like myself, taking advantage of the platform provided by r/SlaveLabour to lure
                            unsuspecting
                            individuals into her web of deceit.</p>
                        <blockquote class="blockquote">
                            <p>"The name of the subreddit seems to have been taken too literally by Francesca, as
                                she
                                treated me as nothing more than a slave, expecting work without any intention of
                                providing rightful compensation."</p>
                        </blockquote>
                        <p>This whole experience has been a rude awakening to the risks and challenges freelancers
                            face
                            in the digital age. It just goes to show how important it is to do your homework, get
                            everything in writing, and make sure platforms have safeguards in place to protect
                            freelancers from getting scammed and exploited.</p>
                        <p>As I continue to navigate this difficult situation, I remain determined to seek justice
                            and
                            hold Francesca accountable for her actions. I have explored various avenues, including
                            reaching out to Francesca's husband, Colin, in the hope that he may intervene and help
                            mediate a resolution. However, I am also prepared to take legal action if necessary, to
                            ensure that my rights are protected and that I receive the compensation I am owed.</p>
                    </article>

                </div>

                <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-body-tertiary rounded">
                            <h4 class="fst-italic">Do Note That</h4>
                            <p class="mb-0">I don't purport to speak on behalf of other people Francesca has
                                potentially
                                scammed, someone of whom are named in this exposé. I am to share my experiences only
                                but
                                it's inevitable that I'll mention others due to the nature of the projects I
                                undertook.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Projects -->

        <div class="container px-4 py-5" id="projects">
            <h2 class="pb-2 border-bottom">
                <i class="bi bi-kanban"></i> Some of The Projects I worked On
            </h2>
            <div class="row row-cols-1 row-cols-lg-2 align-items-stretch g-4 py-5">
                <div class="col">
                    <a class="boring" href="#!">
                        <div class="p-1 rounded-4 shadow-lg">
                            <img src="<?php echo $base_url; ?>/assets/img/yupvoted.png"
                                class="zoom d-block mx-lg-auto img-fluid rounded-4" alt="Yupvoted" width="700"
                                height="500" loading="lazy">
                            <h4 class="pt-3 mt-2 mb-4 fw-bold text-dark d-flex justify-content-center">
                                Yupvoted
                            </h4>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="boring" href="#!">
                        <div class="p-1 rounded-4 shadow-lg">
                            <img src="<?php echo $base_url; ?>/assets/img/blklite.png"
                                class="zoom d-block mx-lg-auto img-fluid rounded-4" alt="Blklite" width="700"
                                height="500" loading="lazy">
                            <h4 class="pt-3 mt-2 mb-4 fw-bold text-dark d-flex justify-content-center">
                                Blklite
                            </h4>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="boring" href="#!">
                        <div class="p-1 rounded-4 shadow-lg">
                            <img src="<?php echo $base_url; ?>/assets/img/cv.png"
                                class="zoom d-block mx-lg-auto img-fluid rounded-4" alt="Online CV" width="700"
                                height="500" loading="lazy">
                            <h4 class="pt-3 mt-2 mb-4 fw-bold text-dark d-flex justify-content-center">
                                Online CV
                            </h4>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <div class="p-2 text-center bg-body-tertiary rounded-4 border">
                        <h3 class="text-body-emphasis m-1">Job Interview Prep</h3>
                        <p class="mx-auto lead p-1">
                            I helped her get ready for numerous interviews, often preparing documents such as the
                            B2B
                            strategy brief below.
                        </p>
                        <div class="col d-flex justify-content-center align-items-center p-2">
                            <img src="<?php echo $base_url; ?>/assets/img/strategy.png" alt="Strategy" width="360"
                                height="300" class="profile-picture rounded-2 border border-dark-75 border-5">
                        </div>
                        <!-- <div class="d-inline-flex gap-2 mb-5">
                            <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
                                Call to action
                                <svg class="bi ms-2" width="24" height="24">
                                    <use xlink:href="#arrow-right-short"></use>
                                </svg>
                            </button>
                            <button class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
                                Secondary link
                            </button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>



        <!-- Evidence -->

        <div class="container" id="evidence">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">My Worksheet</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel.
                        This is
                        the first column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">My Reddit Posts</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the
                        second column.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">Screenshots</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>


        <div class="container">
            <div class="m-4 p-5 bg-light rounded-3">
                <h3 class="text-center">Wanna say hi to her? Here are her socials</h3>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5 pt-4">
                    <a type="button" class="btn btn-primary btn-lg px-4 me-sm-3" href=""><i
                            class="bi bi-linkedin"></i></a>
                    <a type="button" class="btn btn-primary btn-lg px-4 me-sm-3" href=""><i
                            class="bi bi-reddit"></i></a>
                    <a type="button" class="btn btn-primary btn-lg px-4 me-sm-3" href=""><i
                            class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>


        <div class="container col-xl-12 col-xxl-12 px-1 py-5" id="schedule">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Contact Me</h1>
                    <p class="col-lg-10 lead">
                        If you have any information that could assist me in my pursuit of justice or if you have
                        experienced a similar scam, please feel free to reach out to me.
                        I am open to collaboration and support from the freelance community.
                    </p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form id="sendMessageForm"
                        class="p-3 row border rounded-3 bg-light g-3 needs-validation was-validated" novalidate="">
                        <input name="name" id="name" class="control-form" autocomplete="off" maxlength="1"
                            style="display: none;">
                        <div class="col-md-6">
                            <label for="prospectName" class="form-label">Your name</label>
                            <input type="text" class="form-control form-inputs" name="prospectName" id="prospectName"
                                autocomplete="off" minlength="2" maxlength="25" required="">
                            <span id="name-err" class="invalid-feedback">Your name's missing</span>
                            <div style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"
                                data-lastpass-icon-root=""></div>
                        </div>
                        <input name="phone" id="phone" class="control-form" autocomplete="off" maxlength="1"
                            style="display: none;">
                        <div class="col-md-6">
                            <label for="prospectPhone" class="form-label">Phone number</label>
                            <input type="number" class="form-control form-inputs" name="prospectPhone"
                                id="prospectPhone" autocomplete="off" minlength="7" maxlength="25" required="">
                            <span id="phone-err" class="invalid-feedback">It'll be easier to reach you if you leave
                                your
                                phone
                                number</span>
                        </div>
                        <input name="email" id="email" class="control-form" autocomplete="off" maxlength="1"
                            style="display: none;">
                        <div class="col-md-6">
                            <label for="prospectEmail" class="form-label">Email</label>
                            <input type="email" class="form-control form-inputs" name="prospectEmail" id="prospectEmail"
                                autocomplete="off" minlength="8" maxlength="25" required="">
                            <span id="email-err" class="invalid-feedback">I'm certain you have a valid email
                                address</span>
                        </div>
                        <input name="message" id="message" class="control-form" autocomplete="off" maxlength="1"
                            style="display: none;">
                        <div class="col-md-6">
                            <label for="prospectMessage" class="form-label">Your message</label>
                            <textarea class="form-control form-inputs" id="prospectMessage" name="prospectMessage"
                                minlength="5" maxlength="70" rows="1" required=""></textarea>
                            <span id="msg-err" class="invalid-feedback">Just a few words on what you'd like us to
                                work
                                on</span>
                        </div>
                        <input name="comment" id="comment" class="control-form" autocomplete="off" maxlength="1"
                            style="display: none;">
                        <div class="col-12">
                            <button class="btn btn-lg btn-primary w-100" onclick="sendMessage();">
                                <span id="send-button-text">Send</span>
                                <span id="spinner" style="display: none;">
                                    <span class="spinner-border spinner-border-sm" role="status"></span>
                                    <span>Sending...</span>
                                </span>
                            </button>
                        </div>
                        <input type="hidden" id="send" name="send">
                    </form>
                </div>
            </div>
        </div>

        <div class="container">

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Think we can collab? <span
                            class="text-body-secondary">Drop me a line.</span></h2>
                    <p class="lead">Got an itch for a new project but not enough hands? Let's team up - I excel at
                        writing, editing and research. Have a website need a refresh? I love all things code and
                        design.
                    </p>
                    <p class="lead">If you're ready to team up with someone who's been through the wringer and come
                        out
                        swinging, give me a shout. Just say the word and I'm ready to dive in!</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                            fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>
        </div>


        <!-- FOOTER -->
        <div class="bg-dark">
            <div class="container text-light">
                <footer class="bg-dark text-light py-5">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="lead fs-2 fw-bold">
                                Ready to create products that sell?
                            </h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <h5>Drop me a line</h5>
                                </li>
                                <li class="nav-item">
                                    <a class="d-block plain-link" href="tel:+254 728 452 794">
                                        <p class="lead fs-6 text-light">+254 728 452 794</p>
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="d-block plain-link" href="mailto:gjuliuskelvin@gmail.com">
                                        <p class="lead fs-6 text-light">gjuliuskelvin@gmail.com</p>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-4 d-flex justify-content-end">
                            <div>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2">
                                        <a href="javascript: void()" class="nav-link p-0 text-muted">
                                            <img src="assets/img/profile-picture.jpg" alt="Profile picture" width="100"
                                                height="100"
                                                class="profile-picture rounded-circle border border-light border-5">
                                        </a>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex">
                                    <li class="ms-3">
                                        <a class="link-white" href="https://github.com/G-bit94"><i
                                                class="bi bi-github text-light"></i></a>
                                    </li>
                                    <li class="ms-3">
                                        <a class="link-white"
                                            href="https://www.linkedin.com/in/kelvin-gitahi-018a47143/"><i
                                                class="bi bi-linkedin text-light"></i></a>
                                    </li>
                                    <li class="ms-3">
                                        <a class="link-white" href="https://www.facebook.com/gitahi.kaweeru"><i
                                                class="bi bi-facebook text-light"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center pt-4 mt-4 border-top border-secondary">
                        <p>
                            © 2024 Kelvin Gitahi&nbsp;&nbsp;<i class="bi bi-geo-fill"></i>&nbsp;Nairobi.
                        </p>
                    </div>
                </footer>
            </div>
        </div>
    </main>



    <!-- scripts -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- scripts -->

</body>

</html>