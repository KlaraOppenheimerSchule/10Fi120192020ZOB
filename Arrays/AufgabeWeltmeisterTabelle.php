<?php

$weltmeister = array("Brasilien" => array("Land" => "Brasilien", "Anzahl" => 5, "Jahre" => array(1958, 1962, 1970, 1994, 2002)),
                    "Italien" => array("Land" => "Italien", "Anzahl" => 4, "Jahre" => array(1934, 1938, 1982, 2006)),
                    "Deutschland" => array("Land" => "Deutschland", "Anzahl" => 4, "Jahre" => array(1954, 1974, 1990, 2014)),
                    "Uruguay" => array("Land" => "Uruguay", "Anzahl" => 2, "Jahre" => array(1930, 1950)),
                    "Argentinien" => array("Land" => "Argentinien", "Anzahl" => 2, "Jahre" => array(1978, 1986)),
                    "England" => array("Land" => "England", "Anzahl" => 1, "Jahre" => array(1966)),
                    "Frankreich" => array("Land" => "Frankreich", "Anzahl" => 1, "Jahre" => array(1998)),
                    "Spanien" => array("Land" => "Spanien", "Anzahl" => 1, "Jahre" => array(2010)));
echo "<table>";
echo "<tr> <th>Land</th><th>Anzahl</th><th>Jahre</th></tr>";
foreach ($weltmeister as $key => $lands) {
    foreach ($lands as $key => $value) {
        if ($key == "Land") {
            echo "<tr> <td>" . $value . "</td>";
        }else if ($key == "Jahre") {
            for ($i=0; $i < count($value); $i++) { 
                if ($i == 0) {
                    echo "<td>" . $value[$i];
                }else if ($i == (count($value) - 1)) {
                    echo " : " . $value[$i] . "</td> </tr>";
                }else {
                    echo " : " . $value[$i];
                }
            }
        }else {
            echo "<td>" . $value . "</td>";
        }
    }
}
echo "</table>";