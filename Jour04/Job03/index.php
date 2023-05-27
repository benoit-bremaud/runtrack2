<!DOCTYPE html>
<html lang="fr">
    <style>
        body {
            color: white;
            background-color: #68d670;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB03</title>
</head>
<body>
    <header>
        <nav>

        </nav>
    </header>
    <main>
        <h1>Runtrack2 - PHP</h1>
        <p></p>
        <h2>Jour 04 - Job 03</h2>
        <p></p>
        <h3>Consignes :</h3>
        <p>Développez un algorithme qui affiche le nombre d’arguments $_POST.</p>
        <p>Tips :</p>
        <p>Pour tester votre code, créez un formulaire html &lt;form&gt; de type POST avec différents
            champs &lt;input&gt; de type “text” et un &lt;input&gt; de type “submit” pour l’envoi.</p>
        <p>Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :</p>
        <p>"Le nombre d’arguments POST envoyé est : "</p>
        <h3>Début du programme</h3>
        <h4>Mise en place du formulaire</h4>
        <form action="index.php" method="post">
        <fieldset>
            <legend>Arguments test méthode <strong>$_POST</strong></legend>
                <label for="gender">Gender</label>
                    <select name="gender" id="gender">
                        <option value="Mr.">Mr.</option>
                        <option value="Mme">Mme</option>
                        <option value="Pute">Pute</option>
                        <option value="Salope">Salope</option>
                    </select><br>
                <label for="fname">First Name</label>
                <input type="text" name="First Name" id="fname"><br>
                <label for="lname">Last Name</label>
                <input type="text" name="" id="lname"><br>
                <label for="email">Email</label>
                <input type="email" name="Email" id="email"><br>
                <label for="age">Birth Date</label>
                <input type="date" name="Birth Date" id="age"><br>
                <label for="fcolor">What is your favorite color</label>
                    <select name="color[]" id="fcolor" multiple size="3">
                        <option value="blue">Blue</option>
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="yellow">Yellow</option>
                        <option value="black">Black</option>
                        <option value="white">white</option>
                    </select><br><br>
        </fieldset>
        <input type="submit" value="Envoi la purée">
        </form>

        <?php
            echo "Le nombre d'arguments POST envoyé est : ".count($_POST)."<br>";
        ?>

    </main>
    <footer>

    </footer>
</body>
</html>