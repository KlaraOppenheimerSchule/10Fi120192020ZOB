<?php
//Sechs Tippzahlen vom Nutzer auslesen

$nutzerzahl1=$_POST["zahl1"];
$nutzerzahl2=$_POST["zahl2"];
$nutzerzahl3=$_POST["zahl3"];
$nutzerzahl4=$_POST["zahl4"];
$nutzerzahl5=$_POST["zahl5"];
$nutzerzahl6=$_POST["zahl6"];

$nutzerlottozahlen = array($nutzerzahl1, $nutzerzahl2, $nutzerzahl3, $nutzerzahl4, $nutzerzahl5, $nutzerzahl6);

// Sechs Zahlen zufällig generieren lassen und in einem Array speichern
$zahl1=rand(1,49);
$zahl2=rand(1,49);
$zahl3=rand(1,49);
$zahl4=rand(1,49);
$zahl5=rand(1,49);
$zahl6=rand(1,49);

//Array aus den Zahlen erzeugen
$lottozahlen = array($zahl1, $zahl2, $zahl3, $zahl4, $zahl5, $zahl6);

//Ausgabe
echo "Zufasllszahlen" . "</br>";
foreach($lottozahlen as $lottozahl)
{
    echo $lottozahl . " ";
}

echo "</br>";
echo "Nutzerzahlen" . "</br>";

foreach($nutzerlottozahlen as $lottozahl)
{
    echo $lottozahl . " ";
}

echo "</br>";




/*
$pruefung=false;

while($pruefung==false)
{
    $zahl=rand(1,49);

    if($zahl==42)
    {
        $pruefung=true;
    }
}

echo $zahl;
*/