<!DOCTYPE html>
<html lang="fr">
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/images/favicon.webp">
    <title>JOB7</title>
</head>
<body>
    <header>
        <nav>

        </nav>
    </header>
    <main>
        <h1><hr>Runtrack2 - <strong>PHP</strong></h1>
        <p></p>
        <h2><hr>Jour 03 - Job 07</h2>
        <p></p>
        <h3><hr>Consignes :</h3>
        <p>Créez une variable de <b>type string nommée $str</b> et affectez y le texte :</p>
        <p><i>"Certaines choses changent, et d'autres ne changeront jamais."</i></p>
        <p>Créer un <strong>algorithme</strong> qui parcourt cette string en remplaçant le premier caractère par le
        deuxième, le deuxième par le troisième etc.. et le dernier par le premier.</p>
        <p><i>Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c</i></p>
        <h3><hr>Début du programme :</h3>
        <?php
        // Déclaration des variables
        $str = "Certaines choses changent, et d'autres ne changeront jamais.";
        $strlenght = strlen($str);
        $str2 = "";
        // Début du programme
        for ($i=1; $i < $strlenght; $i++) {
            $str2 = $str2.$str[$i];
            }
        $str2 = $str2.strtolower($str[0]);
        ?>
        <i><?php echo ucfirst($str2)?></i>
    </main>
    <footer>

    </footer>
    
</body>
</html>