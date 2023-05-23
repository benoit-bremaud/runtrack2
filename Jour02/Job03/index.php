<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB3</title>
    <link rel="icon" href="images/favicon.webp">
</head>
<body style="margin:0;">
    <header style="background-color:yellow; padding:5px 10px 5px 10px;">
        <h1 style="color:red;">Runtrack2 - PHP</h1>
    </header>
    <nav>

    </nav>
    <main>
        <div style="background-color:green; padding:5px 10px 5px 10px;">
            <h2>Jour 2 - Job 03</h2>
            <h3>Affiche les nombres :</h3>
            <ul>
                <li>De 1 à 100 avec retour à la ligne à chaque nombre</li>
                <li>Ecrire en <i>italique</i> les nombres entre 0 et 20</li>
                <li><u>Souligner</u> les nombres compris entre 25 et 50</li>
                <li>Afficher "La PLateforme" à la place de 42</li>
            </ul>
        </div>
        <div style="background-color:orange; padding:5px 10px 5px 10px;">
        <h3>Début du programme :</h3>
        <?php
            for ($i = 0; $i <= 100; $i++) {
                if ($i <= 20){
                    echo "<i>$i</i>";
                } elseif ($i == 42) {
                    echo "La Plateforme";
                } elseif ($i >= 25 && $i <=50) {
                    echo "<u>$i</u>";
                } else {
                    echo "$i";
                }
                echo "<br>";
            }
        ?>
        </div>
    </main>
    <footer>

    </footer>
    
</body>
</html>