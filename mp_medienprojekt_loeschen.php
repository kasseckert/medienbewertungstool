<?php
SESSION_START();
require_once ('sql.inc.php');
$passwort = $_GET['passwort'];

mysqli_query($db_link, "DELETE FROM medienprojekt_daten WHERE passwort = $passwort");
mysqli_query($db_link, "DELETE FROM medienprojekt_ergebnisse WHERE passwort = $passwort");

$db_link->close();
?>

<html>
    <head>
        <meta http-equiv="refresh" content="0; url=mp_start.php">';
    </head>
    <body>
    </body>
</html>';
