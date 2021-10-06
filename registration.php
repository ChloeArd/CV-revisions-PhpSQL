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
    <a href="connection.php">Me connecter</a>
    <a href="registration.php">M'inscrire</a>
</header>

<main id="form">
    <h1>M'inscrire</h1>
    <form action="assets/php/registration.php" method="post">
        <fieldset>
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname">
            <label for="lastname">Nom</label>
            <input type="text" id="lastname" name="lastname">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password">
            <label for="passwordR">Répet du mot de passe</label>
            <input type="password" id="passwordR" name="passwordR">
            <input class="submit" type="submit" value="Envoyer">
        </fieldset>
    </form>
</main>

<script src="app.js"></script>
</body>
</html>