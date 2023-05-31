<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./resources/images/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="./css/design.css">
    <title>JOB04</title>
</head>
<body>
    <header>
        <div class="container">
            <svg viewBox="0 0 1500 350">
                <symbol id="s-text">
                    <text text-anchor="middle" x="50%" y="70%">Runtrack2 - PHP</text>
                </symbol>

                <g class="g-ants">
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                </g>
            </svg>
        </div>
        <nav>
        </nav>
    </header>
    <main>
        <h1>Runtrack2 - PHP</h1>
        <p></p>
        <h2>Jour 06 - Job 04</h2>
        <p></p>
        <h3>Consignes :</h3>
        <p>Créez une <strong>fonction</strong> nommée <b>"calcule()"</b> qui prend <u>3 paramètres</u> :</p>
        <!-- création d'une liste numérotée -->
        <ol> 
            <li>le premier est un <b>nombre</b></li>
            <li>le deuxième est un <b>caractère</b> (string) contenant le type d'opération (+, -, *, /, %)</li>
            <li>le troisième est un <b>nombre</b></li>
        </ol>
        <p>La fonction doit retourner le résultat de l'opération.</p>
        <h3>Début du programme :</h3>
        <input type="button" onclick="alert('Oh !! Tu as appuyé sur le bouton !!')" value="Click Me!">
        <h4>Création formulaire :</h4>
        <!-- création du formaulaire pour la saisi des paramètres -->
        <form action="index.php" method="post">
            <!-- Création d'un contours -->
            <fieldset>
                <!-- Legend du contours -->
                <legend>Paramètres :</legend>
                <!-- zone de saisi du nméro 1 -->
                <label for="nb1">Nombre 1 :</label>
                <input type="number" name="nombre1" id="nb1"><br>
                <!-- zone de saisi de l'opérateur -->
                <label for="op">Opérateur :</label>
                <input type="text" name="opérateur" id="op"><br>
                <!-- zone de saisi du nombre 2 -->
                <label for="nb2">Nombre 2 :</label>
                <input type="number" name="nombre2" id="nb2"><br>
                <!-- mise en place du bouton reset -->
                <input type="reset" value="Effacer">
                <!-- mise en place du bouton Submit -->
                <input type="submit" value="Calculer">

            </fieldset>
        </form>
            <?php
                function calcule() {
                        if ($_POST["opérateur"] == "+") {
                            return $_POST["nombre1"] + $_POST["nombre2"];
                        } elseif ($_POST["opérateur"] == "-") {
                            return $_POST["nombre1"] - $_POST["nombre2"];
                        } elseif ($_POST["opérateur"] == "*") {
                            return $_POST["nombre1"] * $_POST["nombre2"];
                        } elseif ($_POST["opérateur"] == "/") {
                            return $_POST["nombre1"] / $_POST["nombre2"];
                        } else {
                            return "Erreur de saisi !";
                        }
                    }
            ?>
        <h3>Résultat :</h3>
        <?php
            echo calcule();
        ?>
    </main>
</body>
</html>