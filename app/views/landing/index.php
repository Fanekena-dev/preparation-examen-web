<?php
$baseUrl = Flight::get("flight.base_url");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?? "Template" ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= $baseUrl ?>/public/assets/bootstrap-5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $baseUrl ?>/public/assets/css/theme.css" rel="stylesheet">
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>
    <!-- Invisible modals -->
    <?php include "public/layouts/modals.php" ?>

    <!-- Navbar -->
    <header class="shadow fixed-top">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="/">
                    <?php // include 'public/layouts/logo.php'; ?>
                    LOGO
                </a>
                <!-- Toggle Button for Mobile View -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto d-flex gap-2 align-items-center">
                        <li class="nav-item me-3">
                            <?php include 'public/layouts/btn-theme.php'; ?>
                        </li>
                        <li class="nav-item mb-2 mb-sm-0">
                            <a class="btn btn-outline-success w-100 me-3" href="auth/user">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success w-100" href="auth/register">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-4">
                    <h2>About Me</h2>
                    <h5>Photo of me:</h5>
                    <div class="fakeimg">Fake Image</div>
                    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                    <h3 class="mt-4">Some Links</h3>
                    <p>Lorem ipsum dolor sit ame.</p>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <hr class="d-sm-none">
                </div>
                <div class="col-sm-8">
                    <h2>TITLE HEADING</h2>
                    <h5>Title description, Dec 7, 2020</h5>
                    <div class="fakeimg">Fake Image</div>
                    <p>Some text..</p>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud
                        exercitation ullamco.</p>

                    <h2 class="mt-5">TITLE HEADING</h2>
                    <h5>Title description, Sep 2, 2020</h5>
                    <div class="fakeimg">Fake Image</div>
                    <p>Some text..</p>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud
                        exercitation ullamco.</p>
                </div>
            </div>
        </div>
    </main>
    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>Footer</p>
    </div>

    <script src="<?= $baseUrl ?>/public/assets/bootstrap-5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $baseUrl ?>/public/assets/js/jquery-3.7.1.min.js"></script>
    <script src="<?= $baseUrl ?>/public/assets/js/main.js"></script>
    <script src="<?= $baseUrl ?>/public/assets/js/chart.umd.js"></script>
    <!-- Mirrored from www.w3schools.com/bootstrap5/tryit.asp?filename=trybs_template1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Sep 2022 15:39:46 GMT -->

</html>