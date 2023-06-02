<?php
// Déclaration des variables
$str = $_POST["str"];
$func = $_POST["fonction"];
$nbr = $_POST["nbr"];
$term = $_POST["terminaison"];


// Teste - quelle fonction sera exécutée
if ($func == "gras") {
    recap($str);
    func($func);
    gras($str);
} elseif ($func == "cesar") {
    recap($str);
    func($func);
    cesar($str, $nbr);
} elseif ($func == "plateforme") {
    recap($str);
    func($func);
    plateforme($str, $term);
} else {
    echo "<h1>Saisi incorrecte !</h1>";
}

function recap($var) {
    echo "<h1>Résultats :</h1><h2>Texte initial :</h2><p>" . $var . "</p>";

}

function func($var) {
    echo "<h2>Fonction " . "<b>" . strtoupper($var) . "</b>" . ":</h2>";
}

// Déclaration des fonctions
function gras($var) {
    foreach (explode(" ", $var) as $value) {
        if (ctype_upper($value[0])) {
            $value = "<b>" . $value . "</b>";
        }
        echo "$value ";
    }
}

function cesar($var1, $var2) {

    $var2 = $var2 - (strlen($var1)*intdiv($var2, strlen($var1))); /* Permet de régler le problème si le décalage est plus grand que le nombre de lettre du texte */

    for ($i=0; $i < strlen($var1); $i++) {
        if ($i+$var2 > strlen($var1)-1) {
            $j = ($i+$var2)-strlen($var1);
        } elseif ($i+$var2 < 0) {
            $j = ($i+$var2)+strlen($var1);
        } else {
            $j = $i+$var2;
        }
        echo $var1[$j];
    }
}

function plateforme($var1, $var2) {
    foreach (explode(" ", $var1) as $value) {
        if ($value[-1] == $var2[-1] && $value[-2] == $var2[-2]) {
            $value = $value . "_";
        }
        echo "$value ";
    }    
}
?>