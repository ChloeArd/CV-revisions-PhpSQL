<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon CV</title>
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

<main>
    <button id="details1"> > </button>
    <section id="section1">
        <div id="div1">
            <div id="div2">
                <div id="div3">
                    <figure>
                        <img class="image" id="image1" alt="Photo de Chloé Ardoise">
                        <figcaption id="name"></figcaption>
                    </figure>
                </div>
                <div id="div4">
                    <figure>
                        <figcaption id="text"></figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <h3 id="personal"></h3>
        <div id="second">
        </div>
        <h3 id="languages"></h3>
        <table>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <h3 id="skill"></h3>
        <div id="first">
        </div>
    </section>
    <button id="details2"> > </button>
    <section id="section2" class="right">
        <h1 id="name2"></h1>
        <nav>
            <h2 id="title4"></h2>
            <p id="profile"></p>
        </nav>
        <nav>
            <h2 id="title5"></h2>
            <div id="formation">
            </div>
        </nav>
        <nav>
            <h2 id="title6"></h2>
            <aside id="aside"></aside>
        </nav>
    </section>
</main>
<script src="app.js"></script>
</body>
</html>