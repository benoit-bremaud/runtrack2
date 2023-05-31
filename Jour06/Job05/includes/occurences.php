<?php
// echo substr_count($_POST["texte"], $_POST["letter"])."<br>";
echo "La lettre&nbsp;" . $_POST["letter"] . "&nbsp;est présente&nbsp;" . substr_count($_POST["texte"], $_POST["letter"]) . "&nbsp;fois dans le texte.";

?>