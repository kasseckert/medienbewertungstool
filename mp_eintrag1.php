<!DOCTYPE html>
<html lang="de">

<?php
SESSION_START();
require_once ('sql.inc.php');
$id_schueler = ($_GET['id']);
$passwort = ($_GET['passwort']);
require_once ('mp_projektauswahl.inc.php');
?>

<head>
    <title>
        <?php
            $projekte = $db_link->query("SELECT * FROM medienprojekt_daten WHERE passwort=$passwort");
            while ($zeile_p = $projekte->fetch_object()) {
                echo 'Projekt: '.$zeile_p->projektname;    
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

    <script type="text/javascript">
        function einblenden1() {
            var select1 = document.getElementById('range1').value;
            if(select1 == 0) document.getElementById('modal10').style.display = "block"; 
            else document.getElementById('modal10').style.display = "none";
            if(select1 == 1) document.getElementById('modal11').style.display = "block"; 
            else document.getElementById('modal11').style.display = "none";
            if(select1 == 2) document.getElementById('modal12').style.display = "block"; 
            else document.getElementById('modal12').style.display = "none"; 
            if(select1 == 3) document.getElementById('modal13').style.display = "block"; 
            else document.getElementById('modal13').style.display = "none"; 
            if(select1 == 4) document.getElementById('modal14').style.display = "block"; 
            else document.getElementById('modal14').style.display = "none"; 
            if(select1 == 5) document.getElementById('modal15').style.display = "block"; 
            else document.getElementById('modal15').style.display = "none"; 
        }

        function einblenden2() {
            var select1 = document.getElementById('range2').value;
            if(select1 == 0) document.getElementById('modal20').style.display = "block"; 
            else document.getElementById('modal20').style.display = "none";
            if(select1 == 1) document.getElementById('modal21').style.display = "block"; 
            else document.getElementById('modal21').style.display = "none";
            if(select1 == 2) document.getElementById('modal22').style.display = "block"; 
            else document.getElementById('modal22').style.display = "none"; 
            if(select1 == 3) document.getElementById('modal23').style.display = "block"; 
            else document.getElementById('modal23').style.display = "none"; 
            if(select1 == 4) document.getElementById('modal24').style.display = "block"; 
            else document.getElementById('modal24').style.display = "none"; 
            if(select1 == 5) document.getElementById('modal25').style.display = "block"; 
            else document.getElementById('modal25').style.display = "none"; 
        }

        function einblenden3() {
            var select1 = document.getElementById('range3').value;
            if(select1 == 0) document.getElementById('modal30').style.display = "block"; 
            else document.getElementById('modal30').style.display = "none";
            if(select1 == 1) document.getElementById('modal31').style.display = "block"; 
            else document.getElementById('modal31').style.display = "none";
            if(select1 == 2) document.getElementById('modal32').style.display = "block"; 
            else document.getElementById('modal32').style.display = "none"; 
            if(select1 == 3) document.getElementById('modal33').style.display = "block"; 
            else document.getElementById('modal33').style.display = "none"; 
            if(select1 == 4) document.getElementById('modal34').style.display = "block"; 
            else document.getElementById('modal34').style.display = "none"; 
            if(select1 == 5) document.getElementById('modal35').style.display = "block"; 
            else document.getElementById('modal35').style.display = "none"; 
        }

        function einblenden4() {
            var select1 = document.getElementById('range4').value;
            if(select1 == 0) document.getElementById('modal40').style.display = "block"; 
            else document.getElementById('modal40').style.display = "none";
            if(select1 == 1) document.getElementById('modal41').style.display = "block"; 
            else document.getElementById('modal41').style.display = "none";
            if(select1 == 2) document.getElementById('modal42').style.display = "block"; 
            else document.getElementById('modal42').style.display = "none"; 
            if(select1 == 3) document.getElementById('modal43').style.display = "block"; 
            else document.getElementById('modal43').style.display = "none"; 
            if(select1 == 4) document.getElementById('modal44').style.display = "block"; 
            else document.getElementById('modal44').style.display = "none"; 
            if(select1 == 5) document.getElementById('modal45').style.display = "block"; 
            else document.getElementById('modal45').style.display = "none"; 
        }
    </script>
</head>

<body>

<div class="container p-5 my-5 border bg-light">

    <div class="row">
        <div class="col p-3 bg-light text-dark">
            <h3 class="display-5">
                <?php
                    $projekte = $db_link->query("SELECT * FROM medienprojekt_daten WHERE passwort=$passwort");
                        while ($zeile_p = $projekte->fetch_object()) {
                            echo 'Medienprojekt: <b>'.$zeile_p->projektname.'</b>';    
                        }
                ?>
            </h3>
        </div>
        <div class="col p-3 bg-light text-dark">
            <img src="images/logo.png" class="float-end" height="100">
        </div>
    </div>

<form action="mp_eintrag2.php?id=<?php echo $id_schueler; ?>&passwort=<?php echo $passwort; ?>" method="POST">

<?php
    $eintraege = $db_link->query("SELECT * FROM medienprojekt_ergebnisse WHERE id='$id_schueler'");
    while ($zeile = $eintraege->fetch_object()) {
        echo '<h4>'.$zeile->name.' '.$zeile->vorname.'</h4>';
        echo '<p>';

        echo '<h5 class="text-danger">'.$i.' - <b><output id="num1">0</output></b>/5 Punkte</h5>';

        echo '<input id="range1" min="0" max="5" step="1" type="range" class="form-range" name="value1" value="0" oninput="num1.value = this.value" onchange="einblenden1()">';
        
        echo '<div id="modal10" style="display: block;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i0" value="'.$i0.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$i0.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal11" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i1a" value="'.$i1a.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$i1a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i1b" value="'.$i1b.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$i1b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i1c" value="'.$i1c.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$i1c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal12" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i1a" value="'.$i1a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">1</span> '.$i1a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i1b" value="'.$i1b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">1</span> '.$i1b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i1c" value="'.$i1c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">1</span> '.$i1c.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i3a" value="'.$i3a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$i3a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i3b" value="'.$i3b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$i3b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i3c" value="'.$i3c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$i3c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal13" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i3a" value="'.$i3a.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$i3a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i3b" value="'.$i3b.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$i3b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i3c" value="'.$i3c.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$i3c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal14" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i3a" value="'.$i3a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$i3a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i3b" value="'.$i3b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$i3b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i3c" value="'.$i3c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$i3c.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i5a" value="'.$i5a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">5</span> '.$i5a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i5b" value="'.$i5b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">5</span> '.$i5b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i5c" value="'.$i5c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">5</span> '.$i5c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal15" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i5a" value="'.$i5a.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$i5a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i5b" value="'.$i5b.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$i5b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="i5c" value="'.$i5c.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$i5c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div class="input-group mb-3">';
        echo '<span class="input-group-text">Sonstiges</span>';
        echo '<input type="text" class="form-control" name="textitem1">';
        echo '</div>';
        echo '</p>';

        echo '<p>';

        echo '<h5 class="text-danger">'.$c.' - <b><output id="num2">0</output></b>/5 Punkte</h5>';

        echo '<input id="range2" min="0" max="5" step="1" type="range" class="form-range" name="value2" value="0" oninput="num2.value = this.value" onchange="einblenden2()">';

        echo '<div id="modal20" style="display: block;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c0" value="'.$c0.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$c0.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal21" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c1a" value="'.$c1a.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$c1a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c1b" value="'.$c1b.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$c1b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c1c" value="'.$c1c.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$c1c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal22" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c1a" value="'.$c1a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">1</span> '.$c1a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c1b" value="'.$c1b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">1</span> '.$c1b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c1c" value="'.$c1c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">1</span> '.$c1c.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c3a" value="'.$c3a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$c3a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c3b" value="'.$c3b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$c3b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c3c" value="'.$c3c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$c3c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal23" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c3a" value="'.$c3a.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$c3a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c3b" value="'.$c3b.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$c3b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c3c" value="'.$c3c.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$c3c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal24" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c3a" value="'.$c3a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$c3a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c3b" value="'.$c3b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$c3b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c3c" value="'.$c3c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$c3c.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c5a" value="'.$c5a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">5</span> '.$c5a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c5b" value="'.$c5b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">5</span> '.$c5b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c5c" value="'.$c5c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">5</span> '.$c5c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal25" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c5a" value="'.$c5a.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$c5a.'</label></label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c5b" value="'.$c5b.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$c5b.'</label></label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="c5c" value="'.$c5c.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$c5c.'</label></label>';
        echo '</div>';
        echo '</div>';

        echo '<div class="input-group mb-3">';
        echo '<span class="input-group-text">Sonstiges</span>';
        echo '<input type="text" class="form-control" name="textitem2">';
        echo '</div>';
        echo '</p>';

        echo '<p>';

        echo '<h5 class="text-danger">'.$p.' - <b><output id="num3">0</output></b>/5 Punkte</h5>';

        echo '<input id="range3" min="0" max="5" step="1" type="range" class="form-range" name="value3" value="0" oninput="num3.value = this.value" onchange="einblenden3()">';

        echo '<div id="modal30" style="display: block;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p0" value="'.$p0.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$p0.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal31" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p1a" value="'.$p1a.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$p1a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p1b" value="'.$p1b.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$p1b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p1c" value="'.$p1c.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$p1c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal32" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p1a" value="'.$p1a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">1</span> '.$p1a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p1b" value="'.$p1b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">1</span> '.$p1b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p1c" value="'.$p1c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">1</span> '.$p1c.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p3a" value="'.$p3a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$p3a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p3b" value="'.$p3b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$p3b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p3c" value="'.$p3c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$p3c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal33" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p3a" value="'.$p3a.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$p3a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p3b" value="'.$p3b.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$p3b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p3c" value="'.$p3c.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$p3c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal34" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p3a" value="'.$p3a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$p3a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p3b" value="'.$p3b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$p3b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p3c" value="'.$p3c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$p3c.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p5a" value="'.$p5a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">5</span> '.$p5a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p5b" value="'.$p5b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">5</span> '.$p5b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p5c" value="'.$p5c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">5</span> '.$p5c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal35" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p5a" value="'.$p5a.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$p5a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p5b" value="'.$p5b.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$p5b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="p5c" value="'.$p5c.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$p5c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div class="input-group mb-3">';
        echo '<span class="input-group-text">Sonstiges</span>';
        echo '<input type="text" class="form-control" name="textitem3">';
        echo '</div>';
        echo '</p>';

        echo '<p>';

        echo '<h5 class="text-danger">'.$g.' - <b><output id="num4">0</output></b>/5 Punkte</h5>';

        echo '<input id="range4" min="0" max="5" step="1" type="range" class="form-range" name="value4" value="0" oninput="num4.value = this.value" onchange="einblenden4()">';

        echo '<div id="modal40" style="display: block;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g0" value="'.$g0.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$g0.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal41" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g1a" value="'.$g1a.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$g1a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g1b" value="'.$g1b.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$g1b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g1c" value="'.$g1c.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$g1c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal42" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g1a" value="'.$g1a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">1</span> '.$g1a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g1b" value="'.$g1b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">1</span> '.$g1b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g1c" value="'.$g1c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">1</span> '.$g1c.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g3a" value="'.$g3a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$g3a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g3b" value="'.$g3b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$g3b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g3c" value="'.$g3c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$g3c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal43" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g3a" value="'.$g3a.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$g3a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g3b" value="'.$g3b.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$g3b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g3c" value="'.$g3c.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$g3c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal44" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g3a" value="'.$g3a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$g3a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g3b" value="'.$g3b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$g3b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g3c" value="'.$g3c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-success">3</span> '.$g3c.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g5a" value="'.$g5a.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">5</span> '.$g5a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g5b" value="'.$g5b.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">5</span> '.$g5b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g5c" value="'.$g5c.'">';
        echo '<label class="form-check-label" for="mySwitch"><span class="badge bg-danger">5</span> '.$g5c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div id="modal45" style="display: none;">';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g5a" value="'.$g5a.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$g5a.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g5b" value="'.$g5b.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$g5b.'</label>';
        echo '</div>';
        echo '<div class="form-check form-switch">';
        echo '<input class="form-check-input" type="checkbox" name="g5c" value="'.$g5c.'">';
        echo '<label class="form-check-label" for="mySwitch">'.$g5c.'</label>';
        echo '</div>';
        echo '</div>';

        echo '<div class="input-group mb-3">';
        echo '<span class="input-group-text">Sonstiges</span>';
        echo '<input type="text" class="form-control" name="textitem4">';
        echo '</div>';
        echo '</p>';
    }
?>

<input type="hidden" name="id" value="<?php echo $id_schueler; ?>">

<input type="hidden" name="aktion" value="speichern">
<button type="submit" class="btn btn-success" name="submit" value="speichern">weiter</button>

</form>
</div>
</body>
</html>

<?php
$projekte->free();
$eintraege->free();
$db_link->close();    
exit;
?>
