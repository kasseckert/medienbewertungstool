<?php
require_once ('sql.inc.php');
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
$sql = " INSERT INTO bewertungstool_daten (id, projektname, email, art) ";
$sql .= "VALUES (";
$sql .= "'', '". $_POST['projektname'] ."', ";
$sql .= "'". $_POST['email'] ."', ";
$sql .= "'". $_POST['art'] ."') ";
mysqli_query($db_link, $sql);
echo '<html><head><meta http-equiv="refresh" content="0; url=mp_start.php"></head></html>';
?>