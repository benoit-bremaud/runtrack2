<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture de la table client</title>
</head>
<body>
    <?php
    include_once("connexpdo.inc.php");
    $idcom=connexpdo("jour09","myparam");
    // Requête avec résultats
    $requete="SELECT * FROM `etudiants`";
    $result=$idcom->query($requete);
    if (!$result) 
    {
        $mes_erreurs=$idcom->errorInfo();
        echo "Lecture impossible, code", $idcom->errorCode(),$mes_erreurs[2];
    } 
    else 
    {
        while ($row = $result->fetch(PDO::FETCH_NUM))
        {
            foreach ($row as $donn)
            {
                echo $donn,"&nbsp;";
            }
            echo "<hr>";
        }
        $result->closeCursor();
    }
    $idcom=null;
    ?>
    
</body>
</html>