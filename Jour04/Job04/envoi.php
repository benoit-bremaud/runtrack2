<?php
if (count($_POST) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Argument</th>";
    echo "<th>Valeurs</th>";
    echo "</tr>";

    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "POST est vide";
} 
// // Récupération des données du formulaire
// $gender = $_POST["gender"];
// $fname = $_POST["fname"];
// $lname = $_POST["lname"];
// // $email = $_POST["email"];
// // $age = $_POST["age"];

// // Texte à envoyer
// $texte = "Nom : $gender\n";
// $texte = $texte . "Qui êtes-vous : $fname $lname\n";
// // $texte = $texte . "Votre adresse mail : $email\n";
// // $texte = $texte . "Vous êtes né le : $age\n";
// // // $texte = $texte . "Mot de passe :\n" . $pass;
// echo $texte;
// $texte = stripslashes($texte);

// // // Destinataire et objet du message
// // $destinataire = "benoit.bremaud@laplateforme.io";
// // $objet = "Runtrack2 - PHP - Jour 4 - Job 4";

// // En-tête masqué (codage des caractères)
// $headers = "Content-type: text/plain; charset=utf-8";

// // Envoi du message, puis confirmation sur la page
// $envoi_bon = mail($destinataire, $objet, $texte, $headers);
// if ($envoi_bon) {
//     echo "Envoi OK";
// }
// else {
//     echo "Erreur dans l'envoyage !!";
// }
?>