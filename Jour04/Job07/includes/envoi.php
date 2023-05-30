<?php
    // echo "Hauteur :".$_GET["hauteur"]."<br>";
    // echo "largeur :".$_GET["largeur"]."<br>";
    // echo "ça marche !!";

    $larg = $_GET["largeur"];
    $haut = $_GET["hauteur"];


    for ($i=0; $i <= $larg/2; $i++) { 
        echo str_repeat("&nbsp;", $larg-($i*2))."/".str_repeat("_", $i*2)."\\"."<br>";
    }
    for ($i=0; $i < $haut; $i++) {
        echo "|".str_repeat("&nbsp;", $larg*2)."|"."<br>";
    }
    echo "|". str_repeat("_", $larg) . "|";
    

    // echo str_repeat("&nbsp;", 4)."/".str_repeat("_", 0)."\\".str_repeat("", 4)."<br>";
    // echo str_repeat("&nbsp;", 3)."/".str_repeat("_",1)."\\".str_repeat("  ",3)."<br>";
    // echo str_repeat(' ', 2)."/".str_repeat("_",2)."\\".str_repeat("  ",2)."<br>";
    // echo "         test";

?>