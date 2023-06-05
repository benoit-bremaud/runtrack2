<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./resources/images/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="./css/design.css">
    <title>JOB01</title>
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
        <h2>Jour 07 - Job 01</h2>
        <p></p>
        <h3>Consignes :</h3>
        <p>Créez une <strong>variable de session</strong> nommée <strong>"nbvisites"</strong>.</p>
        <p>À chaque fois que la page est visitée, ajoutez 1.</p>
        <p>Afficher le contenu de cette variable.</p>
        <p>Ajoutez un <strong>bouton</strong> nommé <strong>"reset"</strong> qui permet de réinitialiser ce compteur.</p>
        <h3>Début du programme :</h3>
        <h4>Partie en "PHP"</h4>
        <?php
        session_start();

        // Vérifier si la variable de session existe
        if (!isset($_SESSION['nbvisites'])) {
            $_SESSION['nbvisites'] = 0; // Initialiser la variable de session à 0 si elle n'existe pas
        }

        // Incrémenter la variable de session à chaque visite
        $_SESSION['nbvisites']++;

        // Réinitialiser le compteur si le bouton "reset" est soumis
        if (isset($_POST['reset'])) {
            $_SESSION['nbvisites'] = 0;
        }

        // Afficher le contenu de la variable de session
        echo "Le site a été visité : ". $_SESSION['nbvisites'] . " fois";
        ?>

        <!-- Afficher le bouton "reset" -->
        <form method="POST" action="">
            <input type="submit" name="reset" value="Reset">
        </form>
        <h3>Descritpion du code :</h3>
        <h4>Définitions </h4>
        <fieldset>
        <dl>
            <dt>session_start()</dt>
            <dd><em>Première instruction du script. Pour chaque page ayant accès aux données, on utilise la focntion session_start()</em></dd><br>
            
            <dt>if (!isset($_SESSION['nbvisites'])) {<br>
            &nbsp;&nbsp;$_SESSION['nbvisites'] = 0;<br>}
            </dt>
            <dd><em>Test si la variable de session existe, Si elle n'éxiste pas, on l'a créer et on l'initialise à zéro</em></dd><br>
            
            <dt>$_SESSION['nbvisites']++;</dt>
            <dd><em>On incrémente la variable à chaque connexion au site</em></dd><br>
            
            <dt>if (isset($_POST['reset'])) {<br>
            &nbsp;&nbsp;$_SESSION['nbvisites'] = 0;<br>}</dt>
            <dd><em>Si le bouton "reset" est soumis. Remise à zéro de la variable 'nbvisites'</em></dd><br>
                       
            <dt>echo "Le site a été visité : ". $_SESSION['nbvisites'] . " fois";</dt>
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