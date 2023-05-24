<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/images/favicon.webp">
    <title>JOB2</title>
</head>
<body>
    <header>
        <nav>
        </nav>
    </header>
    <main>
        <h1>Runtrack2 - PHP</h1>
        <p></p>
        <h2>Jour 3 - Job 02</h2>
        <h3>Définitions :</h3>
        <p>Créez une variable de type string nommée $str et affectez y le texte :
“Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
Parcourir cette chaîne en affichant seulement un caractère sur deux.
Ex. : Tu e ntnssrn edsdn etmscmelslre osl li.</p>
        <h3>Début du programme :</h3>
        <?php
            // déclaration des variables
            $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
            // $strlength = count($str);

            // Boucle for
            for ($i=0; $i < strlen("$str"); $i++) { 
                if ($i % 2 ==0) {
                    echo "$str[$i]";
                }
            }

        ?>

    </main>
    <footer>

    </footer>
</body>
</html>