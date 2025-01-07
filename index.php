<?php
// 1. Démarrer la session
session_start();

// 2. Si l'utilisateur n'est pas connecté, le rediriger vers la page de connexion
if (!isset($_SESSION['authenticated'])) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>

<body>
    <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h2>
    <p>Vous êtes connecté(e) avec succès.</p>
    <a href="logout.php">Se déconnecter</a>
</body>

</html>