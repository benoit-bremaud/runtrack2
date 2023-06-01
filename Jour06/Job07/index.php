<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./resources/images/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="./css/design.css">
    
    <title>JOB07</title>
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
        <h1><hr>Runtrack2 - PHP</h1>
        <p></p>
        <h2><hr>Jour 06 - Job 07</h2>
        <p></p>
        <h3><hr>Consignes :</h3>
        <p>Créez un <strong>formulaire</strong> &lt;form&gt; qui contient :</p>
        <ul>
            <li>un <strong>champ</strong> nommé <b>"str"</b> de type <b>"text"</b>,</li>
            <li>une <strong>liste déroulante</strong> nommée <b>"fonction"</b>,</li>
            <li>un <strong>bouton submit</strong>.</li>
        </ul>
        <p>Lorsque vous validez le formulaire, vous devez appliquer des transformations à <b>"str"</b> en 
        fonction de l'option choisie dans la <b>liste déroulante</b>.</p>
        <!-- <fieldset> -->
        <p>Les choix possibles sont :</p>
        <ul>
            <li><b>"gras"</b> : une fonction qui prend en paramètre une chaine de caractère et écrit 
            celle-ci en mettant en <strong>gras</strong> les mots <u>commençant</u> par une lettre <u>majuscule</u>.</li>
            <li><b>"cesar"</b> : une fonction qui prend en paramètre une chaine de caractère et un 
            nombre (qui vaut 2 par défaut).<p>Elle doit afficher la chaine de caractère en décalant 
            chaque caractère d'un nombre égal au nombre passé en paramètre.</p>
            <p>ex : Si le paramètre vaut 1 alors "e" devient "f".</p><p>Si décalage vaut 3 alors "z" devient "c".</p></li>
            <li><b>"plateforme"</b> : une fonction qui prend en paramètre une chaine de caractère. Elle affiche 
            la chaine de caractère en ajoutant un "_" aux mots finissant par "me".</li>
        </ul>
        <!-- </fieldset> -->
        <h3><hr>Début du programme :</h3>
        <h4><hr>Création du formulaire :</h4>
        <form action="./includes/functions.php" target="_blank" method="post">
            <fieldset>
                <legend>Faites votre choix :</legend>
                <label for="txt">Saisissez votre texte :</label>
                <input type="text" name="txt" id="txt">

                <label for="function">Choix transformation :</label>
                
            </fieldset>
        </form>


</p>
    </main>
    <footer>

    </footer>

</body>
</html>