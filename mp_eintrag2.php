<!DOCTYPE html>
<html lang="de">

<?php
SESSION_START();
$id_schueler = ($_GET['id']);
$passwort = (int) ($_GET['passwort']);

require_once ('sql.inc.php');
require_once ('mp_projektauswahl.inc.php');

if ( $_POST['submit'] == 'speichern' ){
    $feedback = '<p><b>Thema: '.$thema.' ('.$medium.')</b></p>';
    $feedback .= '<b>'.$i.': '.$_POST['value1'].'/5 Pkt.:</b>';
    $feedback .= '<ul>';
    if ($_POST['i0'] != '') {
        $feedback .= '<li>'.$_POST['i0'].'</li> ';
        }
    if ($_POST['i1a'] != '') {    
        $feedback .= '<li>'.$_POST['i1a'].'</li> ';
        }
    if ($_POST['i1b'] != '') {    
        $feedback .= '<li>'.$_POST['i1b'].'</li> ';
        }
    if ($_POST['i1c'] != '') {
        $feedback .= '<li>'.$_POST['i1c'].'</li> ';
        }
    if ($_POST['i3a'] != '') {
        $feedback .= '<li>'.$_POST['i3a'].'</li> ';
        }
    if ($_POST['i3b'] != '') {
        $feedback .= '<li>'.$_POST['i3b'].'</li> ';
        }
    if ($_POST['i3c'] != '') {
        $feedback .= '<li>'.$_POST['i3c'].'</li> ';
        }
    if ($_POST['i5a'] != '') {
        $feedback .= '<li>'.$_POST['i5a'].'</li> ';
        }
    if ($_POST['i5b'] != '') {
        $feedback .= '<li>'.$_POST['i5b'].'</li> ';
        }
    if ($_POST['i5c'] != '') {
        $feedback .= '<li>'.$_POST['i5b'].'</li> ';
        }
    if ($_POST['textitem1'] != '') {
        $feedback .= '<li>'.$_POST['textitem1'].'</li> ';
        }
    $feedback .= '</ul>';
    $feedback .= '<b>'.$p.': '.$_POST['value3'].'/5 Pkt.:</b>';
    $feedback .= '<ul>';
    if ($_POST['p0'] != '') {
        $feedback .= '<li>'.$_POST['p0'].'</li> ';
        }
    if ($_POST['p1a'] != '') {
        $feedback .= '<li>'.$_POST['p1a'].'</li> ';
        }
    if ($_POST['p1b'] != '') {
        $feedback .= '<li>'.$_POST['p1b'].'</li> ';
        }
    if ($_POST['p1c'] != '') {    
        $feedback .= '<li>'.$_POST['p1c'].'</li> ';
        }
    if ($_POST['p3a'] != '') {    
        $feedback .= '<li>'.$_POST['p3a'].'</li> ';
        }
    if ($_POST['p3b'] != '') {
        $feedback .= '<li>'.$_POST['p3b'].'</li> ';
        }
    if ($_POST['p3c'] != '') {
        $feedback .= '<li>'.$_POST['p3c'].'</li> ';
        }
    if ($_POST['p5a'] != '') {
        $feedback .= '<li>'.$_POST['p5a'].'</li> ';
        }
    if ($_POST['p5b'] != '') {
        $feedback .= '<li>'.$_POST['p5b'].'</li> ';
        }
    if ($_POST['p5c'] != '') {
        $feedback .= '<li>'.$_POST['p5c'].'</li> ';
        }
    if ($_POST['textitem2'] != '') {
        $feedback .= '<li>'.$_POST['textitem2'].'</li> ';
        }
    $feedback .= '</ul>';
    $feedback .= '<br><b>'.$g.': '.$_POST['value4'].'/5 Pkt.:</b>';
    $feedback .= '<ul>';
    if ($_POST['g0'] != '') {
        $feedback .= '<li>'.$_POST['g0'].'</li> ';
        }
    if ($_POST['g1a'] != '') {
        $feedback .= '<li>'.$_POST['g1a'].'</li> ';
        }
    if ($_POST['g1b'] != '') {
        $feedback .= '<li>'.$_POST['g1b'].'</li> ';
        }
    if ($_POST['g1c'] != '') {
        $feedback .= '<li>'.$_POST['g1c'].'</li> ';
        }
    if ($_POST['g3a'] != '') {
        $feedback .= '<li>'.$_POST['g3a'].'</li> ';
        }
    if ($_POST['g3b'] != '') {
        $feedback .= '<li>'.$_POST['g3b'].'</li> ';
        }
    if ($_POST['g3c'] != '') {
        $feedback .= '<li>'.$_POST['g3c'].'</li> ';
        }
    if ($_POST['g5a'] != '') {
        $feedback .= '<li>'.$_POST['g5a'].'</li> ';
        }
    if ($_POST['g5b'] != '') {
        $feedback .= '<li>'.$_POST['g5b'].'</li> ';
        }
    if ($_POST['g5c'] != '') {
        $feedback .= '<li>'.$_POST['g5c'].'</li> ';
        }
    if ($_POST['textitem3'] != '') {
        $feedback .= '<li>'.$_POST['textitem3'].'</li> ';
        }
    $feedback .= '</ul>';
    $feedback .= '<br><b>'.$c.': '.$_POST['value2'].'/5 Pkt.:</b>';
    $feedback .= '<ul>';
    if ($_POST['c0'] != '') {
        $feedback .= '<li>'.$_POST['c0'].'</li> '; 
        }
    if ($_POST['c1a'] != '') {
        $feedback .= '<li>'.$_POST['c1a'].'</li> '; 
        }
    if ($_POST['c1b'] != '') {
        $feedback .= '<li>'.$_POST['c1b'].'</li> '; 
        }
    if ($_POST['c1c'] != '') {
        $feedback .= '<li>'.$_POST['c1c'].'</li> '; 
        }
    if ($_POST['c3a'] != '') {
        $feedback .= '<li>'.$_POST['c3a'].'</li> '; 
        }
    if ($_POST['c3b'] != '') {
        $feedback .= '<li>'.$_POST['c3b'].'</li> '; 
        }
    if ($_POST['c3c'] != '') {
        $feedback .= '<li>'.$_POST['c3c'].'</li> '; 
        }
    if ($_POST['c5a'] != '') {
        $feedback .= '<li>'.$_POST['c5a'].'</li> '; 
        }
    if ($_POST['c5b'] != '') {
        $feedback .= '<li>'.$_POST['c5b'].'</li> '; 
        }
    if ($_POST['c5c'] != '') {
        $feedback .= '<li>'.$_POST['c5c'].'</li> '; 
        }
    if ($_POST['textitem4'] != '') {
        $feedback .= '<li>'.$_POST['textitem4'].'</li> ';
        }
    $feedback .= '</ul>';
    $sql = " UPDATE medienprojekt_ergebnisse ";
    $sql .= "SET";
    $sql .= " feedback='". $feedback ."', ";
    $sql .= " item1='". $_POST['value1'] ."', ";
    $sql .= " item2='". $_POST['value2'] ."', ";
    $sql .= " item3='". $_POST['value3'] ."', ";
    $sql .= " item4='". $_POST['value4'] ."' ";
    $sql .= " WHERE id='". $_POST['id'] ."'";
    $db_erg = mysqli_query( $db_link, $sql );
    }
?>

<head>
    <title>
        <?php
            $projekte = $db_link->query("SELECT * FROM medienprojekt_daten WHERE passwort=$passwort");
            while ($zeile_p = $projekte->fetch_object()) {
                echo 'Medienprojekt: '.$zeile_p->projektname;    
            }
        ?>
    </title>
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

    <div class="row">
        <div class="col p-3 bg-light text-dark">
            <h3 class="display-5">
                <?php
                    $projekte = $db_link->query("SELECT * FROM medienprojekt_daten WHERE passwort=$passwort");
                    while ($zeile_p = $projekte->fetch_object()) {
                        echo 'Projekt: <b>'.$zeile_p->projektname.'</b>';    
                    }
                ?>
            </h3>
        </div>
        <div class="col p-3 bg-light text-dark">
            <img src="images/logo.png" class="float-end" height="100">
        </div>
    </div>


    <?php
    $eintraege = $db_link->query("SELECT * FROM medienprojekt_ergebnisse WHERE id='$id_schueler'");
    while ($zeile = $eintraege->fetch_object()) {
        echo '<h4>'.$zeile->name.' '.$zeile->vorname.'</h4>';
        echo $i.': '.$zeile->item1.' Punkte<br>';
        echo $c.': '.$zeile->item2.' Punkte<br>';
        echo $p.': '.$zeile->item3.' Punkte<br>';
        echo $g.': '.$zeile->item4.' Punkte<br><br>';
        $gesamt = $zeile->item1 + $zeile->item2 + $zeile->item3 + $zeile->item4;
        echo '<b>Gesamtpunktzahl: '.$gesamt.'</b><br><br>';
    }
    ?>


<form action="mp_schritt1.php" method="POST">
<input type="hidden" name="passwort" value="<?php echo $passwort; ?>">
<input type="hidden" name="aktion" value="speichern">
<button type="submit" class="btn btn-success" name="submit" value="speichern">speichern</button>

</div>
</body>
</html>

<?php
$projekte->free();
$eintraege->free();
$db_link->close();    
exit;
?>