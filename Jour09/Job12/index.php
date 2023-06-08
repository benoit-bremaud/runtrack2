<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JOB12</title>
</head>
<body>
    <h1><hr>Job 12</h1>
    <h2><hr>PHP + SQL</h2>
    <h3><hr>Consignes :</h3>
    <p>En utilisant <strong>PHP</strong>, connectez-vous à la base de données <strong>"jour09"</strong>.</p>
    <p>À l'aide d'une <strong>requête SQL</strong>, sélectionnez </p>
    <ul>
        <li>prénom, nom et date de naissance des étudiants</li>
        <li>nés entre 1998 et 2018.</li>
    </ul>
    <p>Affichez le résultat de cette requête dans un <strong>tableau HTML</strong>.</p>
    <ul>
        <li>La première ligne de votre tableau HTML doit contenir le nom des champs.</li>
        <li>Les suivantes doivent contenir les données présentes dans votre base de données.</li>
    </ul>

<?php
echo "<h3><hr>Requête qui selectionne le prénom, le nom e tal date de naissance des étudiants nés entre 1998 et 2018.</h3>";
echo "<table style='border: solid 2px purple;'>"; # Définition des contours du tableau
echo "<tr><th>prenom</th><th>nom</th><th>naissance</th></tr>"; # affichage des titres du tableau

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:auto;border:2px solid green;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour09";
$requete = "prenom, nom, naissance";
$critere_type = "WHERE YEAR(naissance)";
$critere_valeur = " BETWEEN 1998 AND 2018";
$table = "etudiants";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT $requete FROM $table $critere_type $critere_valeur");
  $stmt->execute();
  
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {  echo 'Erreur :' . $e->getMessage();  }

$conn = null;

echo '</table>';

?>
</body>
</html>