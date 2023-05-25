<!DOCTYPE html>
<html lang="fr">
    <style>
        body {
            color: white;
            background-color: black;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/images/favicon.webp">
    <title>JOB06</title>
</head>
<body>
    <header>
        <nav>

        </nav>
    </header>
    <main>
        <h1><hr>Runtrack2 - <strong>PHP</strong></h1>
            <p></p>
        <h2><hr>Jour 03 - Job 06</h2>
            <p></p>
        <h3><hr>Consignes :</h3>
            <p>Créez une variable de <strong>type string nommée $str</strong> et affectez y le texte :</p>
            <p>“Les choses que l'on possède finissent par nous posséder."</p>
            <p>Créez un algorithme qui parcourt et écrit cette chaine à l’envers.</p>
            <p><em>Ex. : redessop suon rap tnessinif edessop no'l euq sesohc seL</em></p>
        <h3><hr>Début du programme :</h3>
        <?php
            // Déclaration des variables
            $str = "Les choses que l'on possède finissent par nous posséder.";
            $strlenght = strlen($str)-1; /*Attention il y a 58 caractères, soit de 0 à 57*/
            // Début du programme
            echo "Version avec la fonction <b>strrev()</b> :<br>";
            echo "<br>".strrev($str);
            echo "<br>";

            // Version avec une boucle for
            for ($i=$strlenght; $i>=0; $i--) { 
                echo $str[$i];
            }
        ?>
    </main>
    <footer>

    </footer>
    
</body>
</html>