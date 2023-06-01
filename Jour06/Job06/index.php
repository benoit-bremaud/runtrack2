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
        <h1>Runtrack2 - PHP</h1><hr/>
        <p></p>
        <h2>Jour 06 - Job 06</h2><hr/>
        <p></p>
        <h3>Consignes :</h3><hr/>
        <p>Créez une <strong>fonction</strong> nommée "<b>leetSpeak()</b>".</p>
        <p>Cette <strong>fonction</strong> prend en paramètre une <i>chaîne de caractères</i> nommée "<b>$str</b>".</p>
        <p>Elle doit retourner la <i>chaîne de caractères</i> "<b>$str</b>"" convertie en <strong>leet speak</strong>.</p>
        <p>Cela signifie qu'elle doit la modifier de sorte que :</p>
        <ul>
            <li>les "<b>A</b>" deviennent des "<b>4</b>",</li>
            <li>les "<b>B</b>" des "<b>8</b>",</li>
            <li>les "<b>E</b>" des "<b>3</b>",</li>
            <li>les "<b>G</b>" des "<b>6</b>",</li>
            <li>les "<b>L</b>" des "<b>1</b>",</li>
            <li>les "<b>S</b>" des "<b>5</b>",</li>
            <li>les "<b>T</b>" des "<b>7</b>".</li>
        </ul>
        <p> Cela est valable que l'on crie ou non (majuscules et minuscules).</p>
        <h3><hr/>Début du programme</h3>
        <h4><hr/>Formulaire :</h4>
        <form action="./includes/leetspeak.php" target="_blank" method="post">
            <fieldset>
                <legend>Saisi du texte :</legend>
                <label for="txt">Votre Texte :</label>
                <textarea name="text" id="txt" cols="50" rows="4">Tapez ici votre texte</textarea>
                <input type="reset" value="effacer">
                <!-- <input type="submit" value="générer"> -->
                <input type="submit" value="get leet speak">
            </fieldset>
        </form>
    </main>
    <footer>

    </footer>

</body>
</html>