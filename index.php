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
	echo $bootstrap_icons;
    // LOGO
    // https://pixabay.com/de/vectors/logo-origami-vogel-fliegen-blau-1913689/
    //
    
    ?>
</head>

<body>
    <div class="container p-5 my-5 border bg-light">

        <div class="row row-cols-2">
            <div class="col">
                <p></p>
            </div>

            <div class="col">
                <img src="lehrer/images/logo.png" class="float-end" height="150">
            </div>

            <div class="col">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">
                        <h3 class="display-8">Bewertungstool</h3>
                    </div>
                    <div class="card-body bg-white text-dark">
                        <p>Das Werkzeug stellt eine Beispielanwendung dar. Es ist nicht geeignet für eine datenschutzkonforme Speicherung personenbezogener Daten, ein anoymisiertes Arbeit ist möglich.<br>Aktuell gibt es Feedbackbögen für:</p>
                        <p><a href="lehrer/mp_kriterien_video.php" target="_blank" class="btn btn-outline-secondary btn-sm">Feedbackkriterien "Video"</a> 
                            <a href="lehrer/mp_kriterien_praesentation.php" target="_blank" class="btn btn-outline-secondary btn-sm">Feedbackkriterien "Präsentation"</a></p>
                        <p><a href="lehrer/mp_kriterien_audioguide.php" target="_blank" class="btn btn-outline-secondary btn-sm">Feedbackkriterien "Audioguide"</a> 
                            <a href="lehrer/mp_kriterien_podcast.php" target="_blank" class="btn btn-outline-secondary btn-sm">Feedbackkriterien "Podcast"</a></p>
                        <p><a href="lehrer/mp_kriterien_debatte.php" target="_blank" class="btn btn-outline-secondary btn-sm">Feedbackkriterien "Debatte"</a> 
                            <a href="lehrer/mp_kriterien_werken.php" target="_blank" class="btn btn-outline-secondary btn-sm">Feedbackkriterien "Werken"</a></p>
                        <p><a href="lehrer/mp_kriterien_ebook.php" target="_blank" class="btn btn-outline-secondary btn-sm">Feedbackkriterien "eBook"</a></p>
                    </div>
                    <div class="card-footer bg-white text-dark">
                        <p><a href="lehrer/mp_start.php" class="btn btn-outline-primary">weiter</a></p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">
                        <h3 class="display-8">Aufgabengenerator</h3>
                    </div>
                    <div class="card-body bg-white text-dark">
                        <p>Jedes Ergebnis einer Aufgabe zur Medienproduktion kann auch durch eine KI erzeugt werden. Im Zentrum einer Bewertung eines Medienprojektes ist daher die Prozessbeschreibung. Es gilt, den Lerngegenstand exakt zu definieren, um daraus in Bezug auf die Rahmenbedingungen, die Formulierung und die Bewertung mithilfe des Bewertungstools konkrete Gestaltungsansätze auszuwählen.</p>
                    </div>
                    <div class="card-footer bg-white text-dark">
                        <p><a href="lehrer/mp_aa.php" class="btn btn-outline-primary">weiter</a></p>
                    </div>
                </div>

            </div>

        </div>

    <h1 class="float-end"><a href="https://github.com/kasseckert/medienbewertungstool"><i class="bi bi-github"></i></a></h1><br>
    </div>
</body>
</html>