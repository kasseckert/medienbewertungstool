<?php
require_once ('../sql.inc.php');
$sql = " INSERT INTO medienprojekt_ergebnisse (id, name, vorname, passwort) ";
$sql .= "VALUES (";
$sql .= "'', '". $_POST['name'] ."', ";
$sql .= "'". $_POST['vorname'] ."', ";
$sql .= "'". $_POST['passwort'] ."') ";
mysqli_query($db_link, $sql);
echo '<html><head><meta http-equiv="refresh" content="0; url=mp_start.php"></head></html>';
?>