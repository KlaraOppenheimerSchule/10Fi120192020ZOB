<?php
# Aufgabe a)
// Array mit den Informationen wird angelegt

$kennzeichen = [array("Wü", "Würzburg", 130000, "Bayern"),
                array("KT", "Kitzingen", 90000, "Bayern"), 
                array("M", "München", 1450000, "Bayern")];
?>

<!-- Aufagbe b) & c) -->

<!-- Tabelle wird mit Überschriften erzeugt -->
<table border = "1">
    <tr>
        <th>Kennzeichen</th> <th>Stadt</th> <th>Einwohnerzahl</th> <th>Bundesland</th>
    </tr>
<!-- Inhalt wird über foreach-Schleifen ausgegeben -->
        <tr>
            <?php foreach($kennzeichen as $key): ?>

                <?php foreach($key as $input): ?>
                <td><?php echo $input; ?></td>

            <?php endforeach; ?>
         </tr>
         <?php endforeach; ?>
       
</table>