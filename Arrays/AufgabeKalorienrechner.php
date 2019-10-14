<?php

$nahrungsmittel=[$_POST["nahrung1"] 
                ,$_POST["nahrung2"]
                ,$_POST["nahrung3"]
                ,$_POST["nahrung4"]
                ,$_POST["nahrung5"]
                ,$_POST["nahrung6"]
                ,$_POST["nahrung7"]];


$kalorien=      [ $_POST["kalorien1"]
                ,$_POST["kalorien2"]
                ,$_POST["kalorien3"]
                ,$_POST["kalorien4"]
                ,$_POST["kalorien5"]           
                ,$_POST["kalorien6"]
                ,$_POST["kalorien7"]];

#Aufgabe c: Ausgabe nebeneinander
echo $nahrungsmittel[0] . " : " .  $kalorien[0] . "</br>";
echo $nahrungsmittel[1] . " : " .  $kalorien[1] . "</br>";
echo $nahrungsmittel[2] . " : " .  $kalorien[2] . "</br>";
echo $nahrungsmittel[3] . " : " .  $kalorien[3] . "</br>";
echo $nahrungsmittel[4] . " : " .  $kalorien[4] . "</br>";
echo $nahrungsmittel[5] . " : " .  $kalorien[5] . "</br>";
echo $nahrungsmittel[6] . " : " .  $kalorien[6] . "</br>";

#Aufgabe c: Ausgabe nebeneinander mit einer for-Schleife
for ($i=0; $i< count($nahrungsmittel); $i++){
    echo $nahrungsmittel[$i] . " - " . $kalorien[$i];
    echo "</br>";
}

#Aufgabe c: Ausgabe nebeneinander mit einer foreach-Schleife
$i=0;
foreach ($nahrungsmittel as $nahrung) 
{
    echo $nahrung . " / " . $kalorien[$i];   
    echo "</br>";
    $i++; //$i=$i+1;
}

#Aufgabe d
echo "Summe der Kalorien:  " . array_sum($kalorien);

#Aufgabe e
echo "Durchschnittskalorien : " . array_sum($kalorien) / count($kalorien);

#Aufgabe f