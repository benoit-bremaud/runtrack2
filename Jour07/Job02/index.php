<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./resources/images/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="./css/design.css">
    <title>JOB02</title>
</head>
<body>
    <header>
        <div class="container">
                <svg viewBox="0 0 2500 350">
                    <symbol id="s-text">
                        <text text-anchor="middle" x="50%" y="70%">Runtrack2 - Session/Cookies</text>
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
        <h2>Jour 07 - Job 02</h2>
        <p></p>
        <h3>Consignes :</h3>
        <p>Créez une <strong>cookie</strong> nommée <strong>"nbvisites"</strong>.</p>
        <p>À chaque fois que la page est visitée, ajoutez 1.</p>
        <p>Afficher le contenu du cookie.</p>
        <p>Ajoutez un <strong>bouton</strong> nommé <strong>"reset"</strong> qui permet de réinitialiser ce compteur.</p>
        <h3>Début du programme :</h3>
        <h4>Partie en "PHP"</h4>

        <?php
        // Vérifier si la variable de session existe
        if (!isset($_COOKIE["nbvisites"])) {
            $nbvisites = 1;
        } else {
            $nbvisites = $_COOKIE["nbvisites"] +1;
        }

        setcookie("nbvisites", $nbvisites, time()+1000);

        // Réinitialiser le compteur si le bouton "reset" est soumis
        if (isset($_POST["reset"])) {
            setcookie("nbvisites", "", time()-3600);
            $nbvisites = 0;
        }

        // Afficher le contenu de la variable de session
        echo "Le site a été visité : ". $nbvisites . " fois";
        ?>

        <!-- Afficher le bouton "reset" -->
        <form method="POST">
            <input type="submit" name="reset" value="Reset">
        </form>
        
        <h3>Descritpion du code :</h3>
        <h4>Définitions </h4>
        <fieldset>
        <dl>
            <dt>if (!isset($_COOKIE['nbvisites'])) {<br>
            &nbsp;&nbsp;$nbvisites = 1;<br>
            } else {<br>
                $nbvisites = $_COOKIE["nbvisites"] + 1;<br>}
            </dt>
            <dd><em>Test si la variable du cookie existe, Si elle n'éxiste pas, on l'a créer et on l'initialise à un</em></dd><br>
            
            <dt>setcookie("nbvisites", $nbvisites, time()+1000);</dt>
            <dd><em>Définition du nom et de la valeur du cookie ainsi qu'une durée de validité</em></dd><br>
            
            <dt>if (isset($_POST['reset'])) {<br>
            &nbsp;&nbsp;setcookie("nbvisites", "", time()-3600);<br>
            &nbsp;&nbsp;$nbvisites = 0;<br>}</dt>
            <dd><em>Si le bouton "reset" est soumis. On fait disparaitre le cookie et on initialise la variable 'nbvisites' à zéro</em></dd><br>
                       
            <dt>echo "Le site a été visité : ". $nbvisites . " fois";</dt>
            <dd><em>Affiche la valeur de la variable 'nbvisites' + du texte</em></dd><br>
            
            <dt>&lt;form methode="POST" action=""&gt;<br>
            &nbsp;&lt;input type="submit" name="reset" value="Reset"&gt;<br>
            &lt;/form&gt;
            </dt>
            <dd><em>Affichage du bouton "Reset" !</em></dd>
        </dl>
        </fieldset>



    </main>
    <footer>

    </footer>
    
</body>
</html>