<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Me contacter</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
    <a href="index.php">Mon CV</a>
    <a href="form.php">Me contacter</a>
    <?php
    if (isset($_SESSION['role_fk'])) {
        if ($_SESSION['role_fk'] == 1) { ?>
            <a href="accountSkill.php">Mon compte</a>
            <?php
        }
        ?>
        <p>Bonjour <?=$_SESSION['firstname']?></p>
        <?php
    }
    else {
        ?>
        <a href="connection.php">Me connecter</a>
        <a href="registration.php">M'inscrire</a>
        <?php
    }
    ?>
</header>

<main id="form">
    <h1>Mon compte</h1>
    <a class="account" href="accountSkill.php">Ajouter des compétences</a>
    <a class="account" href="accountExperience.php">Ajouter des expériences</a>
    <a class="account" href="accountFormation.php">Ajouter des formations</a>

    <div class="container">
        <h2>Ajouter des Expériences</h2>
        <form action="assets/php/experience.php" method="post">
            <fieldset>
                <label for="startDate">Année du début</label>
                <input type="text" id="startDate" maxlength="4" name="startDate">
                <label for="endDate">Année de fin</label>
                <input type="text" id="endDate" maxlength="4" name="endDate">
                <label for="experience">Expérience</label>
                <input type="text" id="experience" name="experience">
                <input class="submit" type="submit" value="Ajouter">
            </fieldset>
        </form>
    </div>
</main>

<script src="app.js"></script>
</body>
</html>