<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./resources/images/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="./css/design.css">
    
    <title>JOB05</title>
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
        <h2>Jour 06 - Job 05</h2>
        <p></p>
        <h3>Consignes :</h3>
        <p>Créez une <strong>fonction</strong> nommée <b>"occurrences()"</b>.</p>
        <p>Cette <strong>fonction</strong> prend en paramètre une chaîne de caractères nommée <b>"$str"</b> et un caractère nommé <b>"$char"</b>.</p>
        <p>Elle doit retourner le <b>nombre d'occurrences</b> du caractère <b>"$char"</b> dans <b>"$str"</b>.</p>
        <h4>Exemple :</h4>
        <p>Si <b>$str</b> = <i>"Bonjour"</i> et <b>$char</b> = <i>"o"</i> alors le <u>nombre d'occurrences</u> de <b>$char</b> dans
        <b>$str</b> sera : 2</p>
        <h3>Début du programme :</h3>
        <h4>Création du formulaire de saisi :</h4>
        <!-- création du formulaire de saisi -->
        <form action="./includes/occurences.php" target="_blank" method="post">
            <fieldset>
                <legend>Compter les occurences :</legend>
                <div>
                    <label for="letter">Lettre à chercher :</label>
                    <input type="text" name="letter" id="letter" size="2">
                </div>
                <div>
                    <label for="txt">Tapez votre message :</label>
                    <textarea name="texte" id="txt" cols="40" rows="5"></textarea>
                </div>

                <input type="reset" value="Efface">
                <input type="submit" value="Calcule">

            </fieldset>
        </form>
        <h4>Création de la fonction "occurences()"</h4>
        <p>Le <strong>fonction</strong> </p>

    </main>
</body>
</html>