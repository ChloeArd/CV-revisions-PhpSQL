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
    <h1>Me Contacter</h1>
    <form action="#" method="post">
        <fieldset>
            <label id="label1" for="vorname"><span>N</span><span>o</span><span>m</span></label>
            <input type="text" id="vorname">
            <label id="label2" for="firstname"><span>P</span><span>r</span><span>é</span><span>n</span><span>o</span><span>m</span></label>
            <input type="text" id="firstname">
            <label id="label3" for="email"><span>E</span><span>m</span><span>a</span><span>i</span><span>l</span></label>
            <input type="email" id="email">
            <label id="label4" for="requests"><span>D</span><span>e</span><span>m</span><span>a</span><span>n</span><span>d</span><span>e</span><span>s</span></label>
            <textarea id="requests"></textarea>
            <input class="submit" type="submit" value="Envoyer">
        </fieldset>
    </form>
</main>

<script src="app.js"></script>
</body>
</html>