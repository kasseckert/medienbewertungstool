<?php
$projekte = $db_link->query("SELECT * FROM medienprojekt_daten WHERE passwort=$passwort");

while ($zeile_p = $projekte->fetch_object()) {

    $thema = $zeile_p->projektname;
    $medium = $zeile_p->art;

    if ($zeile_p->art == 'Video'){
        require_once ('mp_video.inc.php');     
    }
    if ($zeile_p->art == 'Podcast'){
        require_once ('mp_podcast.inc.php');     
    }
    if ($zeile_p->art == 'Praesentation'){
        require_once ('mp_praesentation.inc.php');     
    }
    if ($zeile_p->art == 'Audioguide'){
        require_once ('mp_audioguide.inc.php');     
    }
    if ($zeile_p->art == 'Werken'){
        require_once ('mp_werken.inc.php');     
    }
    if ($zeile_p->art == 'Debatte'){
        require_once ('mp_debatte.inc.php');     
    }

    // Die folgenden drei Zeilen auskommentieren und den Begriff "Beispieltext" ändern.
    // if ($zeile_p->art == 'Beispieltext'){
    //     require_once ('mp_beispieltext.inc.php');     
    // }
}
?>
