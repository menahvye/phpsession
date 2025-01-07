<?php
// 1. Démarrer la session
session_start();

// Informations de connexion fictives
$correct_username = "admin";
$correct_password = "password123";

// 2. Récupérer des données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// 4. Si le "username" et le "password" sont bons alors créer une $_SESSION["authenticated"] avec la valeur "true" et une $_SESSION["username"] avec le nom de l'uitlisateur.
if ($username == $correct_username && $password == $correct_password) {
    // 4. Si correct, créer les variables de session
    $_SESSION["authenticated"] = true;
    $_SESSION["username"] = $username;

    // Rediriger vers la page d’accueil
    header('Location: index.php');
}
// 5. Sinon, rediriger vers la page "login" avec une erreur (en GET)
else{
    header('Location: login.php?erreur=Mot de passe incorrect');
}