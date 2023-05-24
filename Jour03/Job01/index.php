<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/images/favicon.webp">
    <title>JOB1</title>
</head>
<body style="margin:0; background-color:blue;" >
    <header style="background-color:green;">
        <nav>
        </nav>
        <h1 style="color:red;">Jour 3 - Job 01</h1>
    </header>
    <main>
        <div style="background-color:yellow;">
            <h2>Définition :</h2>
                <ul>
                    <li>Créer un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459</li>
                    <li>Parcourir le tableau et afficher pour chaque nombre s'il est paire ou impaire</li>
                    <li>Afficher de la façon suivante : "X est paire" ou "X est impaire"</li>
                </ul>
        </div>
        <div style="background-color:orange;">
            <h2>Début du programme :</h2>
                <?php
                    $tab = array(200, 204, 173, 98, 171, 404, 459);
                    $tablength = count($tab);
                    for ($i=0; $i < $tablength; $i++) { 
                        if ($tab[$i] % 2 == 0) {
                            echo "$tab[$i] est paire<br>";
                        } else {
                            echo "$tab[$i] est impaire<br>";
                        }
                    }            
                ?>
        </div>
    </main>
    <footer>

    </footer>    
</body>
</html>