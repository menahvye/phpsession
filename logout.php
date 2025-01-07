<?php
// 1 Démarrer la session
session_start();

// 2. Détruire les variables de session et la session.
session_destroy();

// 3. Redirection vers la page de connexion
header('Location: login.php');