<?php
require_once ('sql.inc.php');
$id_passwort = (int) $_POST['passwort'];
$projekte = $db_link->query("SELECT COUNT(passwort) AS anzahl FROM medienprojekt_daten WHERE passwort = $id_passwort");
while($zeile = mysqli_fetch_array($projekte)){
    if($zeile['anzahl'] > 0) {
        echo '<!DOCTYPE html><html lang="de"><head>';
        echo '<title>FEHLER</title><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">';
        echo $bootstrap_css;
        echo $bootstrap_js;
        echo '</head>';
        echo '<body><div class="container p-5 my-5 border bg-light">';
        echo '<a href="mp_start.php"><img src="images/logo.png" class="float-end" height="100"></a>';
        echo '<h3 class="display-5">Das Zugangspasswort ist leider schon vergeben!</h3>';
	    echo '<a href="mp_start.php" class="btn btn-outline-danger">zurück</a>';
        echo '</div></body></html>';
    } else {
        $sql = " INSERT INTO medienprojekt_daten (id, projektname, passwort, art) ";
        $sql .= "VALUES (";
        $sql .= "'', '". $_POST['projektname'] ."', ";
        $sql .= "'". $_POST['passwort'] ."', ";
        $sql .= "'". $_POST['art'] ."') ";
        mysqli_query($db_link, $sql);
        echo '<html><head><meta http-equiv="refresh" content="0; url=mp_start.php"></head></html>';
    }
}
?>