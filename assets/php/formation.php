<?php

use Revision\Classes\DB;
require "../../Classes/DB.php";

if (isset($_POST["date"], $_POST ['formation'])) {
    $bdd = DB::getInstance();

    $date = trim(stripslashes(addslashes($_POST["date"])));
    $formation = trim(stripslashes(addslashes($_POST['formation'])));

    $count = strlen($date);

    if ($count == 4) {
        $sql = $bdd->prepare("INSERT INTO formation (endDate, formation) 
        VALUES (:endDate, :formation)");

        $sql->bindValue(':endDate', $date);
        $sql->bindValue(':formation', $formation);
        $sql->execute();

        header("Location: ../../accountFormation.php?success=0");
    }
    else {
        header("Location: ../../accountFormation.php?error=0");
    }
}
else {
    header("Location: ../../accountFormation.php?error=3");
}