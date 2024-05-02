<?php
    require_once ('../sql.inc.php');
    $klasse = $_POST['klasse'] + 1;

    $sql = "INSERT INTO `medienprojekt_ergebnisse` (`id`, `name`, `vorname`, `passwort`, `item1`, `item2`, `item3`, `item4`, `feedback`) ";
    $sql .= "VALUES ";
    for($i=1; $i < $klasse; $i++) {
        $sql .= "(NULL,'Schüler/in' ,'".$i."', '".$_POST['passwort']."', '', '', '', '', ''), ";
    }
    $sql_angepasst = substr($sql, 0, -2);
    mysqli_query($db_link, $sql_angepasst);
    
    echo '<html><head><meta http-equiv="refresh" content="0; url=mp_start.php"></head></html>';
?>