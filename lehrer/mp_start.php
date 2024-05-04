<?php
require_once ('../sql.inc.php');
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
    ?>
</head>

<body>
<div class="container p-5 my-5 border bg-light">
    <a href="../index.php"><img src="images/logo.png" class="float-end" height="75"></a>
    <h3 class="display-5">Bewertungstool</h3>
    <p></p>

    <div class="row">
	    <div class="col">
		    <h3 class="display-8">1. neues Projekt anlegen</h3>

            <form action="mp_medienprojekt_anlegen.php" method="POST" class="was-validated">
				<div class="form-floating mb-3 mt-3">
					<input type="text" class="form-control" name="projektname" required="required">
					<label for="projektname">Bezeichnung für das Projekt</label>
                    <div class="valid-feedback">Die Eingabe ist korrekt.</div>
				</div>
				<div class="form-floating mb-3 mt-3">
					<input type="text" class="form-control" name="passwort" required="required" pattern = "[0-9]{8}">
					<label for="passwort">Zugangspasswort für das Projekt</label>
                    <div class="valid-feedback">Die Eingabe ist korrekt.</div>
                    <div class="invalid-feedback">Bitte füllen Sie dieses Feld aus. <b>Verwenden Sie 8 Ziffern.</b></div>
				</div>
                <div class="form-floating">
                    <select class="form-select" id="art" name="art" required="required">
                        <option></option>
                        <option>Praesentation</option>
                        <option>Video</option>
                        <option>Podcast</option>
			            <option>Audioguide</option>
                        <option>Werken</option>
			     <option>Debatte</option>
                    </select>
                    <label for="art" class="form-label">Art des Projekts</label>
                </div>
                <br>
				<button type="submit" class="btn btn-success" name="submit" id="submit">Projekt anlegen</button>
			</form>

            <br>
            <br>

            <h3 class="display-8">2. Schüler für ein Projekt anlegen</h3>

            <form action="mp_schueler_anlegen.php" method="POST">
				<div class="form-floating mb-3 mt-3">
					<input type="text" class="form-control" name="name" required="required">
					<label for="name">Nachname</label>
				</div>
				<div class="form-floating mb-3 mt-3">
					<input type="text" class="form-control" name="vorname" required="required">
					<label for="vorname">Vorname</label>
				</div>
                <div class="form-floating">
                    <select class="form-select" id="passwort" name="passwort" required="required">
                        <option></option>
                        <?php
			                $projekte = $db_link->query("SELECT * FROM medienprojekt_daten ORDER BY projektname ASC");
			                    while ($zeile_p = $projekte->fetch_object()) {
				                    echo '<option value="'.$zeile_p->passwort.'">'.$zeile_p->projektname.'</option>';
			                    }
		                ?>
                    </select>
                    <label for="passwort" class="form-label">Projekt</label>
                </div>
                <br>
				<button type="submit" class="btn btn-success" name="submit" id="submit">Schüler anlegen</button>
			</form>
            
            <br>
            <h3 class="display-8">2. oder Klassenliste für ein Projekt anlegen</h3>

            <form action="mp_klasse_anlegen.php" method="POST">
                <div class="form-floating">
                    <select class="form-select" id="passwort" name="passwort" required="required">
                        <option></option>
                        <?php
			                $projekte2 = $db_link->query("SELECT * FROM medienprojekt_daten ORDER BY projektname ASC");
			                    while ($zeile_p2 = $projekte2->fetch_object()) {
				                    echo '<option value="'.$zeile_p2->passwort.'">'.$zeile_p2->projektname.'</option>';
			                    }
		                ?>
                    </select>
                    <label for="passwort" class="form-label">Projekt</label>
                </div>
                <br>
                <div class="form-floating">
                    <select class="form-select" id="klasse" name="klasse" required="required">
                        <option></option>
                        <option value="20">20 Schüler in der Klasse</option>
                        <option value="21">21 Schüler in der Klasse</option>
                        <option value="22">22 Schüler in der Klasse</option>
                        <option value="23">23 Schüler in der Klasse</option>
                        <option value="24">24 Schüler in der Klasse</option>
                        <option value="25">25 Schüler in der Klasse</option>
                        <option value="26">26 Schüler in der Klasse</option>
                        <option value="27">27 Schüler in der Klasse</option>
                        <option value="28">28 Schüler in der Klasse</option>
                        <option value="29">29 Schüler in der Klasse</option>
                        <option value="30">30 Schüler in der Klasse</option>
                        <option value="31">31 Schüler in der Klasse</option>
                        <option value="32">32 Schüler in der Klasse</option>
                    </select>
                    <label for="klasse" class="form-label">Anzahl der Schüler in deiner Klasse</label>
                </div>
                <br>
				<button type="submit" class="btn btn-success" name="submit" id="submit">ganze Klasse anlegen</button>
			</form>

            <br>
            <p class="text-primary"><small><i class="bi bi-c-circle"></i> Medienkompetenzteam Realschule Pegnitz</small></p>

        </div>

        <div class="col">
            <h3 class="display-8">3. Projekt bearbeiten</h3>
                <form action="mp_schritt1.php" method="POST" class="was-validated">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" name="passwort" required="required" pattern = "[0-9]{8}">
                        <label for="passwort">Zugangspasswort für das Projekt</label>
                        <div class="valid-feedback">Die Eingabe ist korrekt.</div>
                        <div class="invalid-feedback">Bitte füllen Sie dieses Feld aus. <b>Verwenden Sie Ihr Zugangspasswort aus 8 Ziffern.</b></div>
                    </div>
                    <button type="submit" class="btn btn-warning" name="submit" id="submit">Projekt bearbeiten</button>
                </form>
            <br>
            <p><a href="mp_bewertungsschluessel_pdf.php" class="btn btn-outline-secondary" target="_blank">vorgeschlagener Bewertungsschlüssel</a>
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#anleitung">Anleitung</button></p>
            <br>
            <br>
		    <h3 class="display-8">bisherige Projekte</h3>
                <ul>
                <?php
			        $eintraege = $db_link->query("SELECT * FROM medienprojekt_daten ORDER BY projektname ASC");
			            while ($zeile = $eintraege->fetch_object()) {
				            echo '<li><b> '.$zeile->projektname.'</b> ('.$zeile->art.')</li>';
			            }
		        ?>
                </ul>
        </div>
    </div>
</div>


<div class="modal" id="anleitung">
    <div class="modal-dialog">
    <div class="modal-content">
        
    <div class="modal-header">
        <h4 class="modal-title">Anleitung</h4>
    </div>
        
	<div class="modal-body">
    <h5>Vorbereitende Schritte</h5>
    <h6>1. neues Projekt anlegen</h6>
    In einem ersten Schritt wird ein geplantes Projekt angelegt. Dies erhält zunächst einen aussagekräftigen Namen ("Bezeichnung für das Projekt")
    und eine eindeutige Kennzeichnung ("Zugangspasswort für das Projekt"), welche aus 8 frei gewählten Ziffern besteht. Das System weist Sie darauf hin,
    ob ggf. ein bereits vergebenes Zugangspasswort vorliegt. Anschließend wird noch die Art des Medienproduktes ausgewählt. Durch diese Auswahl legt man den
    dafür passenden Feedbackbogen fest.<br>
    <ul>
    <li><a href="mp_kriterien_video.php">Feedbackkriterien "Video"</a></li>
    <li><a href="mp_kriterien_praesentation.php">Feedbackkriterien "Präsentation"</a></li>
    <li><a href="mp_kriterien_audioguide.php">Feedbackkriterien "Audioguide"</a></li>
    <li><a href="mp_kriterien_podcast.php">Feedbackkriterien "Podcast"</a></li>
    <li><a href="mp_kriterien_debatte.php">Feedbackkriterien "Debatte"</a></li>
    <li><a href="mp_kriterien_werken.php">Feedbackkriterien "Werken"</a></li>
    </ul>
    <br><br>
    <h6>2. Schüler für ein Projekt anlegen</h6>
    Schüler werden pro Projekt angelegt, also auch jeweils einem zuvor angelegten Projekt über die Auswahl "Projekt" zugeordnet. So können Schüler
    auch mehrere Projekte durchlaufen. Ebenso kann ein anonymisierter Klassensatz erzeugt werden.
    <br><br>
    <h6>3. Projekt bearbeiten</h6>
    Um nun anschließend die Leistung der Schüler bewerten zu können, gibt man die Kennzeichnung ("Zugangspasswort für das Projekt") ein, um zu seinem 
    Projekt zu gelangen.
    <br><br>
    <h5>Projekt bewerten</h5>
    <h6>Feedbackbogen ausfüllen</h6>
    Über das Symbol <i class="bi bi-journal-check"></i> (Projekt bewerten/Projekt nochmal bewerten) gelangt man zum Feedbackbogen. 
    Für die vier Kriterien "Inhalt", "Fachliche Korrektheit" und den beiden jeweils medientypischen Bereichen kann man jeweils 0 bis 5 Punkte vergeben. 
    Je nach Punktauswahl erscheinen mögliche Textbausteine für das Feedback. <b>Bei den Punktzahlen 2 und 4 erscheinen die Textbausteine der benachbarten 
    Punktzahlen. In diesem Fall muss aus jeder Punktekategorie wenigstens ein Textbaustein gewählt werden.</b> Des Weiteren kann im Textfeld "Sonstiges" auch eigener 
    Text eingetragen werden.
    <br><br>
    <h6>Feedbackbögen erhalten</h6>
    Über das Symbol <i class="bi bi-patch-check"></i> können die Feedbackbögen pro Schüler oder als kompletter Klassensatz ausgedruckt werden.<br>
    Ein möglicher Bewertungsschlüssel ist auf der Startseite des Bewertungstools hinterlegt. Dieser ist bestenfalls empfohlen, aber nicht verpflichtend.
    <br><br>
    <h6>Projekt löschen</h6>
    Über das Symbol <i class="bi bi-trash3"></i> kann das eigene Projekt nach Abschluss wieder gelöscht werden. Es ist 
    aber Vorsicht angebracht, da in diesem Fall das Projekt unwiederbringlich gelöscht wird. Eine Wiederherstellung ist nicht möglich.
    </div>
</body>
</html>
