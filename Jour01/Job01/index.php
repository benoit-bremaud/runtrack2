<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/favicon.webp">
    <title>PHP</title>
</head>
<body>
    <?php
        echo "Hello LaPlateforme";
        echo "<br>"; // retour à la ligne

        $str = "LaPlateforme"; // création de la variable 'str' et affectation valeur "LaPlateforme"
        
        echo $str; // affichage du contenu de la variable 'str'
        echo "<br>";
        $str2 = "Vive"; // création et affectation variable $str2
        $str3 = "!";
        echo $str2, " ", $str, " ", $str3;
        echo "<br>";
        echo "$str2 $str $str3";
        echo "<br>";
        $val = 6;
        echo $val;
        $val += 4;
        echo "<br>";
        echo $val;

    ?>
</body>
</html>