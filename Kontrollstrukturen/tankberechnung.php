<?php

$menge = $_POST["menge"];
$art = $_POST["art"];
$faktorSuper = 1.32;
$faktorDiesel = 1.20;
$preisGesamt;
$bonus = false;

if($art == "SUPER"){       //check type
    $preisGesamt = $menge * $faktorSuper;
}else{
    $preisGesamt = $menge * $faktorDiesel;
}
if($menge >= 100){      //check for bonus
    $preisGesamt = $preisGesamt * 0.95;
    $bonus = true;
}

echo ("MENGE: " . $menge . " Liter <br> ART: " . $art . "<br> PREIS: " . $preisGesamt . "€ <br>");

if($bonus == true){     //if bonus 
    echo "Der 5% Bonus für das Tanken von mehr als 100 Liter wurde angerechnet!";
}