<!--  -->
<!-- Van-e ilyen felhasználó -->
<!-- Kérd le minden adatát -->

<?php

require '../database/database.php';

if (!isset($_POST["submit"])) {/* Nem enged csalni */
    header('Location: ../views/index.php');
    die("Don\'t cheat!");
}

$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);

if (mysqli_num_rows($result) == 0) {
    header('Location: ../views/index.php?status=registrationFailed&error=userExist');
    die('Nincs ilyen felhasználó, lehet elírtad a neved.');
} else {
    $userData = mysqli_fetch_assoc($result);

    if (!password_verify($password, trim($userData['password']))) {
        die('Hibás jelszó');
    } else {
        session_start();
        echo 'Bejelentkezés sikeres!';
        $_SESSION['username'] = $userData['username'];
        $_SESSION['email'] = $userData['email'];

        header('Location: ../views/index.php?status=success');
    }
}