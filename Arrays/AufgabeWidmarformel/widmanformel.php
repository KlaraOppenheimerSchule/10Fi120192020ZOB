<?php
    #Übermittelte Werte auslesen
    $geschlecht=$_POST["geschlecht"];
    $kg=$_POST["kg"];
    $v=$_POST["v"];
    $p=$_POST["p"];

    #Formel anwenden
    if($geschlecht == "männlich")
    {
        $r=0.7;
    }
    else if($geschlecht =="weiblich")
    {
        $r=0.6;
    }
    else
    {
        $r=0.8;
    }

    #Formel anwenden
    $A=$v*($p/100)*0.8;
    $blutalkoholkonzentration=$A/($kg*$r);

    #Wert runden
    $blutalkoholkonzentration=round($blutalkoholkonzentration,2);
    echo $blutalkoholkonzentration. " Promille";
       
?>