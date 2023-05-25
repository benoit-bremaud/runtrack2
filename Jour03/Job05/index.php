<!DOCTYPE html>
<html lang="fr">
    <style>
        table, th, td {
            border:solid 1px black;
        }
        th, td {
            width: 100px;
            text-align: center;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/images/favicon.webp">
    <title>JOB5</title>
</head>
<body style="margin:0;">
    <header>
        <nav>

        </nav>
    </header>
    <main>
        <div style="background-color:black; color:white;">
            <h1>Runtrack2 - PHP</h1>
                <p></p> 
            <h2>Jour 03 - Job 05</h2>
                <p></p>
            <h3>Consignes :</h3>
                <p>Créez une variable de type string nommée $str et affectez y le texte :
    “On n’est pas le meilleur quand on le croit mais quand on le sait”.</p>
    <p>Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
    “consonnes” et “voyelles”.</p><p> Créez un algorithme qui parcourt, compte et stocke le
    nombre d'occurrences de consonnes et de voyelles de $str.</p>
    Affichez ces résultats dans un tableau &lt;table&gt; html qui a comme &lt;thead&gt; “Voyelles” et
    “Consonnes”..</p>
        </div>
        <div>
            <h3>Programme :</h3>
                <?php
                // Déclaration des variables
                $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
                $strlenght = strlen($str);
                $dic = array('consonnes' => 0, 'voyelles' => 0 );
                $voy = "aeiouy";
                $voylenght = strlen($voy);
                $cons = "bcdfghjklmnpqrstvwxz";
                $conslenght = strlen($cons);

                // début du programme
                for ($i=0; $i < $strlenght; $i++) { 
                    for ($j=0; $j < $conslenght; $j++) { 
                        if (strtoupper($cons[$j]) == strtoupper($str[$i])) {
                            $dic['consonnes']++;
                        }
                    }
                    for ($k=0; $k < $voylenght; $k++) { 
                        if (strtoupper($voy[$k]) == strtoupper($str[$i])) {
                            $dic['voyelles']++;
                        }
                    }
                }
                ?>
            <h3>Tableau valeurs :</h3>
                <table>
                    <thead>
                        <tr>
                            <th>consonnes</th>
                            <th>voyelles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $dic['consonnes']?></td>
                            <td><?php echo $dic['voyelles']?></td>
                        </tr>                
                    </tbody>
                </table>
                <?php
                // echo "$dic[consonnes]<br>";
                // echo "$dic[voyelles]<br>";
                // echo "array_keys($dizc, 0)"
                ?>

        </div>

    </main>
    <footer>

    </footer>
    
</body>
</html>