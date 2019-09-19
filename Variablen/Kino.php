<?php

echo "Guten Tag, " . $_POST["vorname"] . " " . $_POST["nachname"] . "</br>";
echo "Hier sehen Sie Ihre Quittung";
echo "</br>Ihre angegebene Ticketanzahl " . $_POST["anzahl"] . "</br>";

$ergebnis= $_POST["anzahl"] * 8;

echo "Ihr Gesamtpreis beträgt " . $ergebnis  .  " Euro </br>";
echo "Pro Ticket wurden Ihnen 8 Euro berechnet";
?>