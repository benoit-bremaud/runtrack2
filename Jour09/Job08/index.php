<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JOB07</title>
</head>
<body>
<?php
echo "<h2><hr>Requête qui affiche la <b>somme</b> des capacités des salles</h2>";
echo "<table style='border: solid 2px purple;'>"; # Définition des contours du tableau
echo "<tr><th>Capacite_totale</th></tr>"; # affichage des titres du tableau

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
$requete = "SUM(capacite)";
$critere_type = "";
$critere_valeur = "";
$table = "salles";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT $requete FROM $table");
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