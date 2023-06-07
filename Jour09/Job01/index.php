<?php
// Database settings
$db="jour09";
$dbhost="localhost";
$dbport=3306;
$dbuser="root";
$dbpasswd="";

try {
  $pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
  $pdo->exec("SET CHARACTER SET utf8");
  echo "Connected successfully";
} catch (PDOException $th) {
  echo "Connection failed: " . $e->getMessage();
}
 
?>