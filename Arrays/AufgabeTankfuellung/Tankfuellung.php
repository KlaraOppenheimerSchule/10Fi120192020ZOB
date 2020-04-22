<?php

    $erreichteKilometer=[1020, 923,780, 890];

    $summeDerKilometer=0;
    foreach($erreichteKilometer as $einzelkilometer)
    {
        $summeDerKilometer=$summeDerKilometer+$einzelkilometer;
    }

    $durchschnittskilometer=$summeDerKilometer/count($erreichteKilometer);

    $verbrauch=round(((70/$durchschnittskilometer)*100),2);

    echo "Sie haben durchschittlich " . $durchschnittskilometer . " km mit einer Tankfüllung erreicht und dabei " . $verbrauch . " Liter je 100 Kilometer verbraucht";