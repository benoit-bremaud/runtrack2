<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB4</title>
    <link rel="icon" href="images/favicon.webp">
</head>
<body style="margin:0;">
    <header style="background-color:black; padding:5px 10px 5px 10px;">
        <h1 style="color:red;">Runtrack2 - PHP</h1>
    </header>
    <nav>

    </nav>
    <main>
        <div style="background-color:grey; padding:5px 10px 5px 10px;">
            <h2>Jour 2 - Job 04</h2>
            <h3>Affiche les nombres de 1 à 100 avec retour à la ligne :</h3>
            <h4>Puis remplacer certains nombres selon les conditions suivantes :</h4>
            <ul>
                <li>Ecrire <b>"Fizz"</b> si le nombre est un <u>multiple de 3</u></li>
                <li>Ecrire <b>"Buzz"</b> si le nombre est un <u>multiple de 5</u></li>
                <li>Ecrire <b>"FizzBuzz"</b> si le nombre est un <u>multiple de 3 ET de 5</u></li>
            </ul>
        </div>
        <div style="background-color:purple; padding:5px 10px 5px 10px;">
        <h3>Début du programme :</h3>
        <?php
            for ($i = 2; $i <= 1000; $i++) { /*repète 998 fois une action*/
                for ($j = 2; $j <= $i; $j++) {
                    if ($i % $j != 0) {
                        echo "$i est un nombre premier<br>";
                    }
                }
                // echo "<br>";
            }
        ?>
        </div>
    </main>
    <footer>

    </footer>
    
</body>
</html>