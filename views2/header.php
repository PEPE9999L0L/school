<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebShop</title>


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


    <!-- CSS -->
    <link rel="stylesheet" href="../public/style.css">


</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="main.php">Főoldal</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Termék választás</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <ul>
                                <li><a class="dropdown-item" href="cars.php">Autók</a></li>
                                <li><a class="dropdown-item" href="wheels.php">Kerekek</a></li>
                                <li><a class="dropdown-item" href="bikes.php">Motorok</a></li>
                            </ul>
                        </div>
                    </li>
                    <a class="navbar-brand" href="profile.php">Profil</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="connections.php">Kapcsolat</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </ul>
                <form class="border: 5">
                    <a class="btn btn-warning" type="button" href="register.php">
                        Registration
                    </a>
                    <a class="btn btn-primary" type="button" href="login.php">
                        Login
                    </a>
                </form>
            </div>
        </div>
    </nav>

    <!-- NAVBAR END -->

    <div class="container mt-2"></div>