<?php

use Revision\Classes\DB;
require "../../Classes/DB.php";

if (isset($_POST["skill"])) {
    $bdd = DB::getInstance();

    $skill = trim(stripslashes(addslashes($_POST["skill"])));

    $sql = $bdd->prepare("INSERT INTO skill (skill) 
        VALUES (:skill)");

    $sql->bindValue(':skill', $skill);
    $sql->execute();

    header("Location: ../../accountSkill.php?success=0");
}
else {
    header("Location: ../../accountSkill.php?error=3");
}