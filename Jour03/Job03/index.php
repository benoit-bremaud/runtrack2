<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/images/favicon.webp">
    <title>JOB3</title>
</head>
<body>
    <header>
        <nav>

        </nav>
    </header>
    <main>
        <h1>Runtrack2 - PHP</h1>
        <p>Apprentissage du PHP, t'as vu !!</p>
        <h2>Jour 03 - Job 03</h2>
        <h3>Définitions :</h3>
        <p>Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
Ex. : IoyaeIaaiIaoa</p>
        <h3>Début du programme :</h3>
        <p></p>
        <?php
            // Création des variables
            $str = "I'm sorry Dave I'm afraid I can't do that";
            $strlength = strlen($str);
            $voy = "aeiouy";
            $voylenght = strlen($voy);
            // Début du programme
            for ($i=0; $i < $strlength; $i++) { 
                for ($j=0; $j < $voylenght; $j++) { 
                    if (strtoupper($str[$i]) == strtoupper($voy[$j])) {
                        echo "$str[$i]";
                    }
                }
            }
        ?>

    </main>
    <footer>

    </footer>
    
</body>
</html>