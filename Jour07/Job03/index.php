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
        <p>Créez un <strong>formulaire</strong> qui contient un <strong>input</strong> de type de <strong>text</strong> nommé <strong>"prenom"</strong> et un <strong>bouton submit</strong>.</p>
        <p>Lorsque l'on valide le <strong>formulaire</strong>, le prénom est ajouté dans une <strong>variable de session</strong>.</p>
        <p>Afficher <u>l'ensemble</u> des prénoms.</p>
        <p>Ajoutez un <strong>bouton</strong> nommé <strong>"reset"</strong> qui permet de <u>réinitialiser la liste</u>.</p>
        
        
        <h3>Début du programme :</h3>
        <h4>Partie en "PHP"</h4>

        <?php
        session_start();
        if (!isset($_SESSION["prenom"])) {
            $_SESSION["prenom"] = "";
        }

        if (isset($_POST["envoi"])) {
            # Ajouter
        
            if ($_POST["envoi"] == "Enregistrer") {
                $prenom = $_POST["prenom"];
                $_SESSION["prenom"]=$_SESSION["prenom"]."//".$prenom;
            }

            if ($_POST["envoi"] == "Effacer") {
                // $prenom = $_POST["prenom"];
                $_SESSION["prenom"] = ""; # $_SESSION["prenom"]."//".$prenom;
            }        
            $_POST["envoi"]="";
        }
 
        ?>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend><strong>Saisie des prénoms</strong></legend>
                <table>
                    <tbody>
                        <tr>
                            <th>Prénom :</th>
                            <td><input type="text" name="prenom"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="envoi" value="Enregistrer">
                                <input type="submit" name="envoi" value="Effacer">
                            </td>
                        </tr>
                    </tbody>
                </table>
        </fieldset>
        </form>
        <h3>Résultat :</h3>
        <h4>Liste des prénoms :</h4>
        <?php
            $tab_prenom = explode("//", $_SESSION["prenom"]);
            for ($i=1; $i < count($tab_prenom); $i++) { 
                echo "{$tab_prenom[$i]}"."<br>";
            }
        ?>        

    </main>
    <footer>

    </footer>
    
</body>
</html>