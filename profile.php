<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/home.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Staycation</title>
</head>
<body>
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

    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>