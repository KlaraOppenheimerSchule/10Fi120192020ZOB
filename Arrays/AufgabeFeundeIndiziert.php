<?php
$names = ['Ingo', 'Jürgen', 'Uwe'];

unset($names[2]);

$names[] = 'Uschi';

foreach($names as $name)
{
    echo $name . '</br>';
}