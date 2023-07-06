<!DOCTYPE html>
<html lang="de">
<?php
require_once ('mp_video.inc.php');
require_once ('../sql.inc.php');
?>
<head>
    <title>Video</title>
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
        <h3 class="display-5">Kriterien "Video"</h3>
            <div class="row">
                <div class="col p-3 bg-light text-dark border border-primary">
                    <?php
                        echo '<h5>'.$i.'</h5>';
                        echo '<h6>'.$ia.'</h6>';
                        echo '<b>0 Punkte:</b> '.$i0.'<br>';
                        echo '<b>1 Punkt:</b> '.$i1a.'<br>';
                        echo '<b>3 Punkte:</b> '.$i3a.'<br>';
                        echo '<b>5 Punkte:</b> '.$i5a.'<br><br>';
                        echo '<h6>'.$ib.'</h6>';
                        echo '<b>0 Punkte:</b> '.$i0.'<br>';
                        echo '<b>1 Punkt:</b> '.$i1b.'<br>';
                        echo '<b>3 Punkte:</b> '.$i3b.'<br>';
                        echo '<b>5 Punkte:</b> '.$i5b.'<br><br>';
                        echo '<h6>'.$ic.'</h6>';
                        echo '<b>0 Punkte:</b> '.$i0.'<br>';
                        echo '<b>1 Punkt:</b> '.$i1c.'<br>';
                        echo '<b>3 Punkte:</b> '.$i3c.'<br>';
                        echo '<b>5 Punkte:</b> '.$i5c.'<br><br>';
                    ?>
                </div>
                <div class="col p-3 bg-light text-dark border border-primary">
                    <?php
                        echo '<h5>'.$c.'</h5>';
                        echo '<h6>'.$ca.'</h6>';
                        echo '<b>0 Punkte:</b> '.$c0.'<br>';
                        echo '<b>1 Punkt:</b> '.$c1a.'<br>';
                        echo '<b>3 Punkte:</b> '.$c3a.'<br>';
                        echo '<b>5 Punkte:</b> '.$c5a.'<br><br>';
                        echo '<h6>'.$cb.'</h6>';
                        echo '<b>0 Punkte:</b> '.$c0.'<br>';
                        echo '<b>1 Punkt:</b> '.$c1b.'<br>';
                        echo '<b>3 Punkte:</b> '.$c3b.'<br>';
                        echo '<b>5 Punkte:</b> '.$c5b.'<br><br>';
                        echo '<h6>'.$cc.'</h6>';
                        echo '<b>0 Punkte:</b> '.$c0.'<br>';
                        echo '<b>1 Punkt:</b> '.$c1c.'<br>';
                        echo '<b>3 Punkte:</b> '.$c3c.'<br>';
                        echo '<b>5 Punkte:</b> '.$c5c.'<br><br>';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col p-3 bg-light text-dark border border-primary">
                    <?php
                        echo '<h5>'.$p.'</h5>';
                        echo '<h6>'.$pa.'</h6>';
                        echo '<b>0 Punkte:</b> '.$p0.'<br>';
                        echo '<b>1 Punkt:</b> '.$p1a.'<br>';
                        echo '<b>3 Punkte:</b> '.$p3a.'<br>';
                        echo '<b>5 Punkte:</b> '.$p5a.'<br><br>';
                        echo '<h6>'.$pb.'</h6>';
                        echo '<b>0 Punkte:</b> '.$p0.'<br>';
                        echo '<b>1 Punkt:</b> '.$p1b.'<br>';
                        echo '<b>3 Punkte:</b> '.$p3b.'<br>';
                        echo '<b>5 Punkte:</b> '.$p5b.'<br><br>';
                        echo '<h6>'.$pc.'</h6>';
                        echo '<b>0 Punkte:</b> '.$p0.'<br>';
                        echo '<b>1 Punkt:</b> '.$p1c.'<br>';
                        echo '<b>3 Punkte:</b> '.$p3c.'<br>';
                        echo '<b>5 Punkte:</b> '.$p5c.'<br><br>';
                    ?>
                </div>
                <div class="col p-3 bg-light text-dark border border-primary">
                    <?php
                        echo '<h5>'.$g.'</h5>';
                        echo '<h6>'.$ga.'</h6>';
                        echo '<b>0 Punkte:</b> '.$g0.'<br>';
                        echo '<b>1 Punkt:</b> '.$g1a.'<br>';
                        echo '<b>3 Punkte:</b> '.$g3a.'<br>';
                        echo '<b>5 Punkte:</b> '.$g5a.'<br><br>';
                        echo '<h6>'.$gb.'</h6>';
                        echo '<b>0 Punkte:</b> '.$g0.'<br>';
                        echo '<b>1 Punkt:</b> '.$g1b.'<br>';
                        echo '<b>3 Punkte:</b> '.$g3b.'<br>';
                        echo '<b>5 Punkte:</b> '.$g5b.'<br><br>';
                        echo '<h6>'.$gc.'</h6>';
                        echo '<b>0 Punkte:</b> '.$g0.'<br>';
                        echo '<b>1 Punkt:</b> '.$g1c.'<br>';
                        echo '<b>3 Punkte:</b> '.$g3c.'<br>';
                        echo '<b>5 Punkte:</b> '.$g5c.'<br><br>';
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
