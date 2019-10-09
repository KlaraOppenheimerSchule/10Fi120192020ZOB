<?php

// Das Code Array mit Morsezeichen

$thecode = ['a' => '.-',
            'b' =>'-...',
            'c' => '-.-.',
            'd' => '-..',
            'e' => '.',
            'f' => '..-.',
            'g' => '--.',
            'h' => '....',
            'i' => '..',
            'j' => '.---',
            'k' => '-.-',
            'l' => '.-..',
            'm' => '--',
            'n' => '-.',
            'o' => '---',
            'p' => '.--.',
            'q' => '--.-',
            'r' => '.-.',
            's' => '...',
            't' => '-',
            'u' => '..-',
            'v' => '...-',
            'w' => '.--',
            'x' => '-..-',
            'y' => '-.--',
            'z' => '--..',
            '1' => '.----',
            '2' => '..---',
            '3' => '...--',
            '4' => '....-',
            '5' => '.....',
            '6' => '-....',
            '7' => '--...',
            '8' => '---..',
            '9' => '----.',
            '0' => '-----',
            ' ' => ' '];
 
//Ausgabe der Morsecodes
echo "The Code: " . "</br>";;
foreach($thecode as $key=>$value)
{
    echo $key . "</br>";
}
echo "</br>";


// Zu übersetzendes Array
$translate = ['g','o','t','t',' ','l','i','e','b','t',' ','u','n','s',' ','a','l','l','e'];

// Ausgabe des Morsecodes - leichte Ansatz
foreach($translate as $sign)
{
    echo $thecode[$sign] . ' | ';
}
echo "</br>";


// Komplizierter Ansatz
foreach($translate as $sign)
{
    foreach($thecode as $key=>$value)
    {
        //== ist nicht case-sensitive
        if($key===$sign)
        {
            echo $sign;
        }          
    }
}