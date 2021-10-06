<?php

use Revision\Classes\DB;
require "../../Classes/DB.php";

if (isset($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"], $_POST['passwordR'])) {
    $bdd = DB::getInstance();

    $firstname = trim(stripslashes(addslashes($_POST["firstname"])));
    $lastname = trim(stripslashes(strtoupper(addslashes($_POST['lastname']))));
    $email = trim($_POST["email"]);
    $password = trim(stripslashes(addslashes($_POST["password"])));
    $passwordR = trim(stripslashes(addslashes($_POST['passwordR'])));

    // I encrypt the password.
    $encryptedPassword = password_hash($password, PASSWORD_BCRYPT);

    $requete = $bdd->prepare("SELECT * FROM user WHERE email = :email");
    $requete->bindParam(":email", $email);
    $state = $requete->execute();

    if ($state) {
        $user = $requete->fetch();
        // Check if the email address is valid.
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $maj = preg_match('@[A-Z]@', $password);
            $min = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);

            if ($password === $passwordR) {
                // Checks if the password contains upper case, lower case, number and at least 8 characters.
                if ($maj && $min && $number && strlen($password) >= 8) {
                    $sql = $bdd->prepare("INSERT INTO user (firstname, lastname, email, password, role_fk) 
                        VALUES (:firstname, :lastname, :email, :password, :role_fk)");

                    $sql->bindValue(':firstname', $firstname);
                    $sql->bindValue(':lastname', $lastname);
                    $sql->bindValue(':email', $email);
                    $sql->bindValue(':password', $encryptedPassword);
                    // People who register automatically have role 2 : user.
                    $sql->bindValue(':role_fk', 2);
                    $sql->execute();

                    header("Location: ../../connection.php?success=0");
                } else {
                    header("Location: ../../registration.php?error=1");
                }
            }
            else {
                header("Location: ../../registration.php?error=4");
            }
        }
        else {
            header("Location: ../../registration.php?error=2");
        }
    }
}
else {
    header("Location: ../../registration.php?error=3");
}