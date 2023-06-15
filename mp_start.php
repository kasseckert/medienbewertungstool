<?php
require_once ('sql.inc.php');
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
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
    ?>
</head>

<body>
<div class="container p-5 my-5 border bg-light">
    <a href="index.php"><img src="images/logo.png" class="float-end" height="75"></a>
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
                <div class="form-floating">
                    <select class="form-select" id="art" name="art" required="required">
                        <option></option>
                        <option>Praesentation</option>
                        <option>Video</option>
                        <option>Podcast</option>
			            <option>Audioguide</option>
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
			                $projekte = $db_link->query("SELECT * FROM bewertungstool_daten ORDER BY projektname ASC");
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
            
            <br><img src="images/projekt.png" height="300">
            <p class="text-primary"><small><span class="material-symbols-outlined">copyright</span> Medienkompetenzteam Realschule Pegnitz</small></p>

        </div>

        <div class="col">
		    <h3 class="display-8">bisherige Projekte</h3>
                <ul>
                <?php
			        $eintraege = $db_link->query("SELECT * FROM bewertungstool_daten ORDER BY projektname ASC");
			            while ($zeile = $eintraege->fetch_object()) {
				            echo '<li><b> '.$zeile->projektname.'</b> ('.$zeile->art.')</li>';
			            }
		        ?>
                </ul>
            <p><a href="mp_bewertungsschluessel_pdf.php" class="btn btn-outline-secondary" target="_blank">vorgeschlagener Bewertungsschlüssel</a>
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#anleitung">Anleitung</button> 
            <a href="logout.php" class="btn btn-danger" target="_blank">abmelden</a></p>
            <br>
            <br>
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
    <br><br>
    <h6>2. Schüler für ein Projekt anlegen</h6>
    Schüler werden pro Projekt angelegt, also auch jeweils einem zuvor angelegten Projekt über die Auswahl "Projekt" zugeordnet. So können Schüler
    auch Projekte durchlaufen.
    <br><br>
    <h6>3. Projekt bearbeiten</h6>
    Um nun anschließend die Leistung der Schüler bewerten zu können, gibt man die Kennzeichnung ("Zugangspasswort für das Projekt") ein, um zu seinem 
    Projekt zu gelangen.
    <br><br>
    <h5>Projekt bewerten</h5>
    <h6>Feedbackbogen ausfüllen</h6>
    Über das Symbol <span class="material-symbols-outlined">add_notes</span> (Projekt bewerten/Projekt nochmal bewerten) gelangt man zum Feedbackbogen. 
    Für die vier Kriterien "Inhalt", "Fachliche Korrektheit" und den beiden jeweils medientypischen Bereichen kann man jeweils 0 bis 5 Punkte vergeben. 
    Je nach Punktauswahl erscheinen mögliche Textbausteine für das Feedback. <b>Bei den Punktzahlen 2 und 4 erscheinen die Textbausteine der benachbarten 
    Punktzahlen. In diesem Fall muss aus jeder Punktekategorie wenigstens ein Textbaustein gewählt werden.</b> Des Weiteren kann im Textfeld "Sonstiges" auch eigener 
    Text eingetragen werden.
    <br><br>
    <h6>Feedbackbögen erhalten</h6>
    Über das Symbol <span class="material-symbols-outlined">verified</span> können die Feedbackbögen pro Schüler oder als kompletter Klassensatz ausgedruckt werden.<br>
    Ein möglicher Bewertungsschlüssel ist auf der Startseite des Bewertungstools hinterlegt. Dieser ist bestenfalls empfohlen, aber nicht verpflichtend.
    <br><br>
    <h6>Projekt löschen</h6>
    Über das Symbol <span class="material-symbols-outlined">delete_forever</span> kann das eigene Projekt nach Abschluss wieder gelöscht werden. Es ist 
    aber Vorsicht angebracht, da in diesem Fall das Projekt unwiederbringlich gelöscht wird. Eine Wiederherstellung ist nicht möglich.
    </div>
</body>
</html>
