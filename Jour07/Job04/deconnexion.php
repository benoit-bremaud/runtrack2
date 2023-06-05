<?php
// Supprimer le cookie
setcookie('prenom', '', time() - 3600);

// Rediriger vers la page d'accueil
header('Location: index.php');
?>
