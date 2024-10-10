<?php

if (!isset($_POST["submit"])) {/* Nem enged csalni */
    header('Location: ../views/registration.php');
    die("Don\'t cheat!");
}


require '../database/database.php';

/* Regisztráció elkezdődik ellenőrzés */

/* Speciális karakter skippelése (injection elleni védekezés alapja) */
echo 'Login start<br>';

$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
$passwordConfirm = mysqli_real_escape_string($connection, $_POST['passwordConfirm']);
$email = mysqli_real_escape_string($connection, $_POST['email']);

/* Kaptam-e értéket */
if (empty($username) || empty($password) || empty($passwordConfirm) || empty($email)) {
    die('Kérlek tölts ki minden mezőt a regisztráció előtt.');
} else {
    /* ha minden értéket megkaptam, akkor megyek tovább */
    echo 'Data collected';


    /* Jelszó ellenőrzés */
    if (strlen($password) < 8) {
        die('Adj meg legalább 8 karaktert');
    } else if (!preg_match('/[A-Z]/', $password)) {
        die('Adj meg legalább egy nagy betűt');
    } else if (!preg_match('/[a-z]/', $password)) {
        die('Adj meg legalább egy kis betűt');
    } else if (!preg_match('/[0-9]/', $password)) {
        die('Adj meg legalább egy számot');
    } else if (!preg_match('/[*!#&@]/', $password)) {
        die('Adj meg legalább egy speciális karaktert');
    } else if ($password != $passwordConfirm) {
        die('Add meg a jelszót a védelemhez');
    } else {
        echo 'Password Confirmed<br>';
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        echo 'PW hashed<br>';

        /* Email ellenörző */
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die('Nem megfelelő email formátum');
        } else {

            /* Van-e ilyen username? */
            $user_query = 'SELECT * FROM users WHERE username = "' . $username . '";';
            $result = mysqli_query($connection, $user_query);

            if (mysqli_num_rows($result) != 0) {
                header('Location: ../views/registration.php?status=registrationFailed&error=userExist');
                die('Van ilyen felhasználónév, válassz másikat');
            } else {
                /* Adatbázis feltöltő */
                $sql_query = 'INSERT INTO `users`(`username`,`password`,`email`)
                VALUES ("' . $username . '", "' . $hashPassword . '", "' . $email . '")';
                mysqli_query($connection, $sql_query);
                echo 'Registration successful';

                /* Főoldalra vissza küldő */
                header('Location: ../views/index.php?status=registrationSuccess');
            }


        }
    }
}