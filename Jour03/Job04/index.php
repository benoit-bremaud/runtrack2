<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/images/favicon.webp">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>

        </nav>
    </header>
    <main>
        <h1>Runtrack2 - PHP</h1>
        <p></p>
        <h2>Jour 03 - Job 04</h2>
        <p></p>
        <h3>COnsignes :</h3>
        <p>Créez une variable de type string nommée $str et affectez y le texte :
“Dans l'espace, personne ne vous entend crier”.
Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
dans cette chaîne.</p>
        <h3>Début du programme :</h3>
        <?php
            // Déclaration des variables
            $str = "Dans l'espace, personne ne vous entend crier";
            $strlenght = strlen($str);
            $alphabet = "abcdefghijklmnopqrstuvwxyz";
            $alphabetlenght = strlen($alphabet);
            $count = 0;

            // Compter le nombre de "a"
            for ($i=0; $i < $alphabetlenght; $i++) {
                $count = 0;
                for ($j=0; $j < $strlenght; $j++) {
                    if (strtoupper($str[$j]) == strtoupper($alphabet[$i])) {
                        $count++;
                    }
                }
                if ($count != 0) {
                    echo "La lettre $alphabet[$i] est présente $count fois dans le texte<br>";
                }
            }
        ?>
    </main>
    <footer>

    </footer>
    
</body>
</html>