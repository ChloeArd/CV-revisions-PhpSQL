<?php

use Revision\Classes\DB;
require "../../Classes/DB.php";

if (isset($_POST["startDate"], $_POST['endDate'], $_POST ['experience'])) {
    $bdd = DB::getInstance();

    $startDate = trim(stripslashes(addslashes($_POST["startDate"])));
    $endDate = trim(stripslashes(addslashes($_POST["endDate"])));
    $experience = trim(stripslashes(addslashes($_POST['experience'])));

    $count = strlen($startDate);
    $count2 = strlen($endDate);

    if ($count == 4) {
        $sql = $bdd->prepare("INSERT INTO experience (startDate, endDate, experience) 
        VALUES (:startDate, :endDate, :experience)");

        $sql->bindValue(':startDate', $startDate);
        $sql->bindValue(':endDate', $endDate);
        $sql->bindValue(':experience', $experience);
        $sql->execute();

        header("Location: ../../accountExperience.php?success=0");
    }
    else {
        header("Location: ../../accountExperience.php?error=0");
    }
}
else {
    header("Location: ../../accountExperience.php?error=3");
}