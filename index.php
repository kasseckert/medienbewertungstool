<?php
require_once ('sql.inc.php');
?>

<!DOCTYPE html>
<html lang="de">
    
<head>
    <title>Bewertungstool</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    echo $bootstrap_css;
    echo $bootstrap_js;
	echo $symbol;
    // LOGO
    // https://pixabay.com/de/vectors/logo-origami-vogel-fliegen-blau-1913689/
    //
    
    ?>
</head>

<body>
    <div class="container p-5 my-5 border bg-light">
        <img src="lehrer/images/logo.png" class="float-end" height="75">
        <h3 class="display-5">Bewertungstool</h3>
        <p>Das folgende Werkzeug stellt eine Beispielanwendung dar. <br>
        Dieses ist nicht geeignet für eine datenschutzkonforme Speicherung personenbezogener Daten.</p>
        <p></p><a href="lehrer/mp_start.php" class="btn btn-outline-success">weiter</a></p>
        <h3 class="display-5">Aufgabengenerator</h3>
        <p>Jedes Ergebnis einer Aufgabe zur Medienproduktion kann auch durch eine KI erzeugt werden. Im Zentrum einer Bewertung eines Medienprojektes ist daher die Prozessbeschreibung. Es gilt, den Lerngegenstand exakt zu definieren, um daraus in Bezug auf die Rahmenbedingungen, die Formulierung und die Bewertung mithilfe des Bewertungstools konkrete Gestaltungsansätze auszuwählen.</p>
        <p></p><a href="lehrer/mp_aa.php" class="btn btn-outline-success">weiter</a></p>
    </div>
</body>
</html>