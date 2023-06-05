<?php
setcookie("prenom", $_POST["prenom"], time()+86300);
header('Location: index.php');

?>