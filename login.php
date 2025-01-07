<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>

<body>
    <h2>Connexion</h2>
    <form action="authenticate.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Se connecter</button>
    </form>
    <?php
    // 1. S'il y a une erreur, afficher un message d'erreur
    if (isset($_GET['erreur'])) {
        echo "".$_GET['erreur']."";
    }
    ?>
</body>

</html>