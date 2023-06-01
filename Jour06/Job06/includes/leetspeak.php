<?php
//// méthode 1
// $txt = $_POST["text"];
// $txt = str_ireplace("A", 4 , $txt, $countA);
// $txt = str_ireplace("B", 8 , $txt, $countB);
// $txt = str_ireplace("E", 3 , $txt, $countE);
// $txt = str_ireplace("G", 6 , $txt, $countG);
// $txt = str_ireplace("L", 1 , $txt, $countL);
// $txt = str_ireplace("S", 5 , $txt, $countS);
// $txt = str_ireplace("T", 7 , $txt, $countT);
// echo $txt."<br>";
// echo "La lettre A à été changé ". $countA . " fois.<br>";
// echo "La lettre B à été changé ". $countB . " fois.<br>";
// echo "La lettre E à été changé ". $countE . " fois.<br>";
// echo "La lettre G à été changé ". $countG . " fois.<br>";
// echo "La lettre L à été changé ". $countL . " fois.<br>";
// echo "La lettre S à été changé ". $countS . " fois.<br>";
// echo "La lettre T à été changé ". $countT . " fois.<br>";

// méthode 2
$txt = $_POST["text"];
$leet = array("A"=>"4", "B"=>"8", "E"=>"3", "G"=>"6", "L"=>"1", "L"=>"1", "S"=>"5", "T"=>"7");
foreach ($leet as $let => $nbr) {
    $txt = str_ireplace($let, $nbr, $txt);
}
echo $txt;
?>