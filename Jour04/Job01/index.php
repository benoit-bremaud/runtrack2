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
    <title>JOB01</title>
</head>
<body>
    <header>
        <nav>

        </nav>
    </header>
    <main>
        <h1><hr>Runtrack2 - PHP</h1>
            <p></p>
        <h2><hr>Jour 04 - Job 01</h2>
            <p></p>
        <h3><hr>Consignes :</h3>
            <p>Développez un <strong>algorithme</strong> qui affiche le nombre d’arguments <b>$_GET</b>.</p>
            <p>Tips :</p>
            <p>Pour tester votre code, créez un formulaire html &lt;form&gt; de type GET avec différents
champs &lt;input&gt; de type “text” et un &lt;input&gt;> de type “submit” pour l’envoi.</p>
<p>Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :</p>
<p><i>"Le nombre d’arguments GET envoyé est : "</i></p>
        <aside>
            <p></p>
        </aside>
        <h3><hr>Début du programme :</h3>
        <p></p>
        <h4>Création d'un formulaire :</h4>
        <form action="index.php" method="get">
            <fieldset style="padding: 20px">
                <legend>Login Info</legend>
                <label for="username">Name</label>
                <input type="text" name="Username" id="username" placeholder="username">
                <label for="passe">Mot de passe</label>
                <input type="password" name="motdepasse" id="pass" placeholder="password">
            </fieldset>
            <input type="submit" value="OK">
        </form>
        <!-- Début section php -->
        <?php
        echo "Le nombre d’arguments GET envoyé est : ".count($_GET)."<br>";
    
        ?>
    </main>
    <footer>

    </footer>
    
</body>
</html>