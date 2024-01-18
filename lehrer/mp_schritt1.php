<?php
SESSION_START();
require_once ('../sql.inc.php');
$passwort = $_POST['passwort'];
?>

<!DOCTYPE html>
<html lang="de">
    
<head>
    <title>Bewertungstool Projekte</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    echo $bootstrap_css;
    echo $bootstrap_js;
	echo $bootstrap_icons;
	//echo $symbol;
    ?>
</head>

<body>

<div class="container p-5 my-5 border bg-light">

    <a href="mp_start.php"><img src="images/logo.png" class="float-end" height="100"></a>
    <h3 class="display-5">Bewertungstool</h3>
	<?php
		$projekte = $db_link->query("SELECT * FROM medienprojekt_daten WHERE passwort=$passwort");

		while ($zeile_p = $projekte->fetch_object()) {
			echo '<h5 class="display-8">Projektname: '.$zeile_p->projektname.' ('.$zeile_p->art.')</h5>';
			}
	?>
    <br>
		<?php
			$eintraege = $db_link->query("SELECT * FROM medienprojekt_ergebnisse WHERE passwort='$passwort' ORDER BY name ASC");
			
			$anzahl_datensaetze = $eintraege->num_rows;
			if ($anzahl_datensaetze == 0) {
				echo '<p class="text-danger">Für das eingegebene Zugangspasswort wurde kein Projekt angelegt oder es wurden noch keine Schüler für das Projekt angelegt.</p>';
				echo '<p><a href="mp_start.php" class="btn btn-outline-danger">zurück</a></p>';
			} else {
				echo '<p><a href="mp_punkteliste_pdf.php?passwort='.$passwort.'" target="_blank">';
				echo '<i class="bi bi-card-list"></i></a> Punkteliste<br>';
				echo '<a href="mp_feedbackbogen_alle_pdf.php?passwort='.$passwort.'" target="_blank">';
				echo '<i class="bi bi-patch-check"></i></a>';
				if ($anzahl_datensaetze == 1) {
					echo ' '.$anzahl_datensaetze.' Feedbackbogen ausdrucken<br>';
				} else {
					echo ' alle '.$anzahl_datensaetze.' Feedbackbögen ausdrucken<br>';
				}
			}

			while ($zeile = $eintraege->fetch_object()) {
				echo '<p class="text-bg-primary"><b>&emsp;'.$zeile->name.' '.$zeile->vorname.'</b></p>';
				if ($zeile->feedback !=""){
					$gesamt = $zeile->item1 + $zeile->item2 + $zeile->item3 + $zeile->item4;
					echo '<a href="mp_feedbackbogen_pdf.php?id='.$zeile->id.'" target="_blank"><i class="bi bi-patch-check"></i></a> ';
					echo '<b>Gesamtpunktzahl: '.$gesamt.'</b><br>';
					echo '<p class="text-secondary"><a href="mp_eintrag1.php?id='.$zeile->id.'&passwort='.$zeile->passwort.'"><i class="bi bi-journal-check"></i></a> <small>Projekt nochmal bewerten</small></p>';
					echo '<br>';
				} else {
					echo '<p class="text-secondary">Es liegt noch keine Bewertung vor.</p>';
					echo '<p class="text-secondary"><a href="mp_eintrag1.php?id='.$zeile->id.'&passwort='.$zeile->passwort.'"><i class="bi bi-journal-check"></i></a> <small>Projekt bewerten</small></p>';
				}
				echo '<br><br>';
			}

			if ($anzahl_datensaetze > 0) {
				echo '<p class="text-danger"><a href="mp_medienprojekt_loeschen.php?passwort='.$passwort.'"><i class="bi bi-trash3"></i></a> <b>VORSICHT: </b>Projekt wird endgültig gelöscht!</p>';
			}
		?>
	</div>
</div>
</body>
</html>

<?php
// Schließen der Datenbankverbindung
$projekte->free();
$eintraege->free();
$db_link->close();
exit;
?>