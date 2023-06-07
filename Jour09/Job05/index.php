<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JOB04</title>
</head>
<body>
<?php
echo "<h2><hr>Requête qui affiche la liste des personnes qui ont moins de 18 ans</h2>";
echo "<table style='border: solid 1px black;'>"; # Définition des contours du tableau
echo "<tr><th>Prénom</th><th>Nom</th><th>Naissance</th><th>Sexe</th><th>Email</th></tr>"; # affichage des titres du tableau

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:auto;border:1px solid black;'>" . parent::current(). "</td>";
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
$requete = "prenom, "."nom, "."naissance, "."sexe, "."email ";
$critere_type = "naissance";
$critere_valeur = 2005;
$table = "etudiants";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT $requete FROM $table WHERE YEAR($critere_type)>='$critere_valeur'");
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