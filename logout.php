<?php
session_start();
session_unset(); // Effacer toutes les données de la session
session_destroy(); // Détruire la session
header("Location: login.php"); // Rediriger vers la page de connexion après la déconnexion
exit();
?>
