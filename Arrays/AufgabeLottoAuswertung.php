<?php

// Filling the numbers from the .html file into an list. | Die selbstgegebenen Zahlen werden in eine Liste eingefügt.
$self_entered_numbers = [$_POST["first"], $_POST["second"], $_POST["third"], $_POST["forth"], $_POST["fifth"], $_POST["sixth"]];

// Generating 6 random numbers in a list. | 6 zufällige Zahlen werden in einer Liste generiert.
$generated_numbers = [rand(1,49), rand(1,49), rand(1,49), rand(1,49), rand(1,49), rand(1,49)];



// Looping through both lists | Doppelte Schleife die durch beide Listen durchläuft 
foreach($self_entered_numbers as $self_entered)
{
    echo "Zu prüfenden selbst gewählte Zahl: " . $self_entered . "</br>";
    foreach($generated_numbers as $generated) 
    {
        echo "Zu prüfende zufällige Zahl: " . $generated . "</br>";
        
// If the self-value matches the generated value, it should print out something | Falls ein Treffer landet, soll er dies sagen.
        if ($self_entered == $generated) 
        {
            echo "Treffer" . " $self_entered" . "</br>";
        } 
    }
}