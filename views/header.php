<?php session_start(); ?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop and authentication system</title>

    <link rel="shortcut icon" href="../public/img/dwarf.png" type="image/x-icon">

    <!-- Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="../public/style.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/b8d8792df0.js" crossorigin="anonymous"></script>


</head>

<body>
    <nav class="navbar navbar-dark bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Törpe Tárnák</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        Törpe Webshop
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registration.php">Registration</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Dwarfs</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="dwarves.php">Dwarf list</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo '<li nav-item="mt-3">
                            <div class="col-12">
                                <form action="../controllers/login.php">
                                    <div class="text-center">
                                        <button href="index.php" class="btn btn-danger" type="submit" name="submit"
                                            id="submit">Kijelentkezés</button>
                                    </div>
                                </form>
                            </div>
                        </li>';
                        } else {
                            echo '<li nav-item="mt-3">
                            <div class="col-12">
                                <h4 style="text-align: center;">Bejelentkezés</h4>
                                <form action="../controllers/login.php">
                                    <input class="form-control mb-2" type="text" name="loginUsername"
                                        id="loginUsername">
                                    <input class="form-control mb-2" type="password" name="loginPassword"
                                        id="loginPassword"><br>
                                    <div class="text-center">
                                        <button href="index.php" class="btn btn-primary" type="submit" name="submit"
                                            id="submit">Bejelentkezés</button>
                                    </div>
                                </form>
                            </div>
                        </li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END Navbar -->
    <div class="container mt-3" id="mainContent"></div>