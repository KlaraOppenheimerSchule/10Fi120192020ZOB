<?php

    
    $bezeichnung_tisch = "Schreibtisch";
    $bezeichnung_stuhl = "Bürostuhl";
    $bezeichnung_lampe = "Lampe";
    $bezeichnung_potisch = "Computertisch";
    $preis_tisch = 1990.00;
    $preis_stuhl = 589.00;
    $preis_lampe = 29.00;
    $preis_pctisch = 999.00;
    $netto_result = $preis_tisch + $preis_stuhl + $preis_lampe + $preis_pctisch;
    const MWST = 1.19;
    const EURO = "Euro";
    $brutto_result = $netto_result * MWST;


        echo "Netto-Gesamtpreis der eingekauften Artikel:" . $netto_result . EURO . "<br/>";
        echo "<hr>";
        echo "Brutto-Gesamtpreis der eingekauften Artikel:" . $brutto_result . EURO . "<br/>";
        echo "Brutto-Preis " . " <b> Schreibtisch </b> " . $preis_tisch * MWST . EURO . "<br/>";
        echo "Brutto-Preis " . " <b> Bürostuhl </b>  " . $preis_stuhl * MWST . EURO . "<br/>";
        echo "Brutto-Preis " . " <b> Lampe </b> " . $preis_lampe * MWST . EURO . "<br/>";
        echo "Brutto-Preis " . " <b> Computertisch </b> " . $preis_pctisch * MWST . EURO . "<br/>";
        