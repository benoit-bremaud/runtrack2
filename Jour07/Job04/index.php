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
        <p>Créez un formulaire de connexion qui contient un input de type de text nommé “prenom” et un bouton submit nommé “connexion”.</p>
        <p>Lorsque l'on valide le formulaire, le prénom est ajouté dans un cookie.</p>
        <p>Si un utilisateur a déjà entré son prénom, n'affichez plus le formulaire de connexion.</p>
        <p>À la place, écrivez “Bonjour prenom !” et ajouter un bouton “Déconnexion” nommé “deco”.</p>
        <p>Lorsque l'utilisateur se déconnecte, il faut à nouveau afficher le formulaire de connexion.</p>
        
        
        <h3>Début du programme :</h3>
        <h4>Partie en "PHP"</h4>

        <?php
        // Vérifier si le prénom est déjà présent dans le cookie
        if(isset($_COOKIE['prenom'])) {
            // Si le prénom est présent, afficher un message de bienvenue et le bouton de déconnexion
            $prenom = $_COOKIE['prenom'];
            echo "Bonjour $prenom !";
            echo '<br><br>';
            echo '<form action="deconnexion.php" method="post">';
            echo '<input type="submit" name="deco" value="Déconnexion">';
            echo '</form>';
        } else {
            // Si le prénom n'est pas présent, afficher le formulaire de connexion
            echo '<form action="connexion.php" method="post">';
            echo 'Prénom: <input type="text" name="prenom"><br><br>';
            echo '<input type="submit" name="connexion" value="Connexion">';
            echo '</form>';
        }
        ?>

    </main>
    <footer>

    </footer>
    
</body>
</html>