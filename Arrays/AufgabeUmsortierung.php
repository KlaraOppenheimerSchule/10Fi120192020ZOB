<?php

$arrayEins=[0,1,2,3,4,5,6,7,8,9];
var_dump($arrayEins);

$arrayZwei=[];

$arrayZwei[0]=$arrayEins[9];
$arrayZwei[1]=$arrayEins[8];
$arrayZwei[2]=$arrayEins[7];
$arrayZwei[3]=$arrayEins[6];
$arrayZwei[4]=$arrayEins[5];
$arrayZwei[5]=$arrayEins[4];
$arrayZwei[6]=$arrayEins[3];
$arrayZwei[7]=$arrayEins[2];
$arrayZwei[8]=$arrayEins[1];
$arrayZwei[9]=$arrayEins[0];

echo "</br>";
var_dump($arrayZwei);

?>


<?php
$aufsteigend = [0,1,2,3,4,5,6,7,8,9];
$absteigend = array_reverse($aufsteigend);
echo "Aufsteigend: ";
foreach($aufsteigend as $element){
    echo $element;
};
echo "<br>";
echo "Absteigend: ";
foreach($absteigend as $element){
    echo $element;
};