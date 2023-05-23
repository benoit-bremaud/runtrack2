<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.webp">
    <title>JOB2</title>
</head>
<body  style="background-color:yellow;">
    <header>
        <h1 style="background-color:hotpink;">RunTrack2 - PHP</h1>
    </header>
    <nav>

    </nav>
    <main>
        <h2 style="color:red;">Jour02 - Job02</h2>
        <h3 style="color:green;">Affiche les nombres sauf :</h3>
            <ul>
                <li>Compris entre 0 et 1337 sauf 26, 37, 88, 1111 et 3233</li>
                <li>Avec un retour à la ligne entre chaque nombre</li>
                <!-- <li>Le nombre 42 doit être en <strong>gras</strong> et <u>souligné</u></li> -->
            </ul>
        <h3>Début du programme :</h3>
        <?php
            for ($x = 0; $x <= 1337; $x++) {
                if ($x != 26 && $x != 37 && $x != 88 && $x != 1111 && $x != 3233) {
                    echo "$x <br>";
                }
            }
        ?>
    </main>
    <footer>

    </footer>
    
</body>
</html>