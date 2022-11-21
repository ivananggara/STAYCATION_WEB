<?php

    $now = strval(basename($_SERVER['PHP_SELF'], '.php'));
    ?>
    <nav class="navbar navbar-expand-lg position-fixed w-100 bg-transparent" style="z-index: 999;">
    <div class="container">
            <a class="navbar-brand d-flex align-items-center" href=".">
                <h1 class="logo my-auto">Stay<span class="sub-logo">cation.</span></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex flex-row align-items-center">
                <li class="search-icon d-flex flex-row justify-content-between align-items-center">
                    <input class="bg-transparent" type="text" placeholder="search by city">
                    <a href=""><img src="assets/img/search-btn.svg" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= strcmp($now, 'index') == 0 ? ' active' : '' ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= strcmp($now, 'profile') == 0 ? ' active' : '' ?>" href="profile.php">My Profile</a>
                <li class="nav-item-sign">
                    <a class="nav-link-sign" href="">SignIn/SignUp</a>
                </li>
            </ul>
            </div>
    </div>
    </nav>