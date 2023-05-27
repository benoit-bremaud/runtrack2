<!DOCTYPE html>
<html lang="fr">
    <style>
        body {
            background-color:black;
            color: white;
        }
        table, td, th {
            margin-block: 0;
            /* padding: 2px 5px 2px 5px; */
            border: solid 1px white;
        }
        td, th {
            padding: 2px 20px 2px 20px;
        }
        fieldset {
            padding: 15px;
            display: flex;
        }
        fieldset>div {
            margin-left: 50px;
        }
        fieldset>section {
            border: solid 1px white;
            padding: 10px;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/images/favicon.webp">
    <title>JOB02</title>
</head>
<body>
    <header>
        <nav>

        </nav>
    </header>
    <main>
        <h1><hr>Runtrack2 - PHP</h1>
        <p></p>
        <h2><hr>Jour 04 - Job 02</h2>
        <p></p>
        <h3>Consignes :</h3>
        <p>Développer un <strong>algorithme</strong> qui affiche dans un tableau HTML &lt;table&gt; l’ensemble des
        arguments $_GET et les valeurs associées.</p>
        <p>Il doit y avoir deux colonnes : argument et valeur.</p>
        <p>Tips :</p>
        <p>Pour tester votre code, créez un <b>formulaire HTML</b> &lt;form&gt; de type <strong>GET</strong> avec différents
        champs &lt;input&gt; de type <b>“text”</b> et un &lt;input&gt; de type <b>“submit”</b> pour l’envoi.</p>
        <p>Vous pouvez ensuite afficher avec <strong>echo</strong> directement dans votre page par exemple ce
        tableau :</p>
        <p>
            <table>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>
                <tr>
                    <td>prenom</td>
                    <td>Stephane</td>
                </tr>
                <tr>
                    <td>nom</td>
                    <td>Dupont</td>
                </tr>
            </table>
        </p>
        <h3>Début du programme :</h3>
        <p></p>
        <h4>Création d'un formulaire :</h4>
        <p></p>
        <form action="index.php" method="get">
            <fieldset>
                <legend>Login Informations</legend>
                <section>
                    <label for="fname">First Name</label><br>
                    <label for="lname">Last Name</label><br>
                    <label for="age">Age</label><br>
                    <label for="password">Pass Word</label><br>
                </section>
                <div>
                    <input type="text" name="First Name" id="fname" placeholder="first name"><br>
                    <input type="text" name="Last Name" id="lname" placeholder="last name"><br>
                    <input type="date" name="Age" id="age"><br>
                    <input type="password" name="Pass Word" id="password" placeholder="Pass Word"><br>
                </div>
                
            </fieldset>
            <input type="submit" value="Submit">
        </form>
        <h4>Résultats :</h4>
        <?php
            if (count($_GET) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Argument</th>";
                echo "<th>Valeurs</th>";
                echo "</tr>";
            
                foreach ($_GET as $key => $value) {
                    echo "<tr>";
                    echo "<td>".$key."</td>";
                    echo "<td>".$value."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "GET est vide";
            }         
        ?>
    </main>
    <footer>
    </footer>
</body>
</html>