<?php
if (isset($_POST["style"])) {
    $sel_style = $_POST["style"];
    echo "Je choisis le : " . $sel_style;
}
   
?>

<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./resources/images/favicon.webp" type="image/x-icon">
    <title>JOB05</title>
    <style>
        <?php include "./css/" . $sel_style . ".css"; ?>
    </style>
</head>

<body>
    <header>
        <nav>

        </nav>
    </header>
    <main>
        <h1>Runtrack2 - PHP</h1>
        <p></p>
        <h2>Jour 05 - Job 05</h2>
        <p></p>
        <h3>Consignes :</h3>
        <p>Créer un <strong>formulaire</strong> qui contient une <strong>liste déroulante</strong> nommée
            <em>"style"</em> et un bouton
            <em>submit</em>.
        </p>
        <p>La <b>liste déroulante</b> doit proposer au moins "style1", "style2" et "style3".</p>
        <h4>Créer 3 fichiers css nommés :</h4>
        <ul>
            <li>style1.css</li>
            <li>style2.css</li>
            <li>style3.css</li>
        </ul>
        <h4>Chaque style doit avoir des effets sur le design du formulaire :</h4>
        <ul>
            <li>la couleur de background</li>
            <li>la police d'écriture</li>
            <li>...</li>
        </ul>
        <h4>Lorsque l'on valide le formulaire, le style sélectionné doit être inclus et donc le visuel doit changer.</h4>
        <p></p>
        <h3>Formulaire :</h3>
        <form action="index.php" method="post">
            <fieldset>
                <legend>Choix du style :</legend>

                <label for="style">Choisissez un style :</label>
                <select name="style" id="style">
                    <option value="style1">Style 1</option>
                    <option value="style2">Style 2</option>
                    <option value="style3">Style 3</option>
                    <option value="style4">Style 4</option>
                </select>
                <input type="submit" value="Appliquer le style">
            </fieldset>
        </form>


    </main>

</body>

</html>