<?php

use Revision\Classes\DB;

require "../../Classes/DB.php";

if (isset($_POST["email"], $_POST["password"])) {
    $bdd = DB::getInstance();

    $email = trim($_POST['email']);
    $password = trim(addslashes(stripslashes($_POST['password'])));

    // I get the name of the user
    $stmt = $bdd->prepare("SELECT * FROM user WHERE email = :email");
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    if ($stmt) {
        header("Location: ../../connection.php?error=0");
    }

    $user = $stmt->fetch();
    // I check that the password encrypted on my database that I retrieved using the '$ user [' password ']' loop corresponds to the password entered by the user
    if (password_verify($password, $user['password'])) {
        // If the 2 password correspond then we open the session and we store the user's data in a session.
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['role_fk'] = $user['role_fk'];
        $id = $_SESSION['id'];
        header("Location: ../../index.php?id=$id");
    }
    else {
        header("Location: ../../connection.php?error=2");
    }
}
else {
    header("Location: ../../connection.php?error=1");
}