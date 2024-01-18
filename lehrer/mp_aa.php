<?php
    SESSION_START();
    require_once ('../sql.inc.php');

    // Inhalte
    //
    // Sozialform
        // Auswahl im Formular
        $sozialform1 = 'Einzelarbeit';
        $sozialform2 = 'Partnerarbeit';
        $sozialform3 = 'Gruppenarbeit';
        // Formulierung in der Aufgabenstellung
        $sozialform1_value = 'in Einzelarbeit';
        $sozialform2_value = 'mit einem Partner';
        $sozialform3_value = 'in einer Gruppe';
    // Medienprodukt
        // Auswahl im Formular
        $medienprodukt1 = 'Präsentation';
        $medienprodukt2 = 'Video';
        $medienprodukt3 = 'Podcast';
        $medienprodukt4 = 'Audioguide';
        // Formulierung in der Aufgabenstellung
        $medienprodukt1_value = 'eine Präsentation';
        $medienprodukt2_value = 'ein Video';
        $medienprodukt3_value = 'einen Podcast';
        $medienprodukt4_value = 'einen Audioguide';
    // Art des Wissens (Kompetenz)
        // Auswahl im Formular
        $wissen1 = 'Faktenwissen (Schwierigkeitsgrad leicht)';
        $wissen2 = 'Handlungswissen (Schwierigkeitsgrad durchschnittlich)';
        $wissen3 = 'Konzeptwissen (Schwierigkeitsgrad schwer)';
        // Formulierung in der Aufgabenstellung
        $wissen1_value = 'Benenne | Liste auf ';
        $wissen2_value = 'Erkläre | Begründe | Fasse zusammen | Führe durch ';
        $wissen3_value = 'Vergleiche | Prüfe | Entwickle | Begründe | Konzipiere ';
    // Prozessbericht
    // Auswahl im Formular
        // Wie kommt man zum Ergebnis?
        $prozess1 = 'Quellenangaben';
        // zus. Wie wird das Ergebnis inhaltlich geprüft
        $prozess2 = 'Quellenangaben + fachliche Überprüfung';
        // zus. Wie wird das Ergebnis mit der gestellten Anforderung abgeglichen?
        $prozess3 = 'Quellenangaben + fachliche Überprüfung + Abgleich mit Aufgabenstellung';
        // Formulierung in der Aufgabenstellung
        $prozess1_value = 'Belege deine Quellen. Gib bei Internetseiten den vollständigen Link an, bei KI-Abfragen den kompletten Prompt.';
        $prozess2_value = 'Lege ausführlich dar, wie du deine Ergebnisse auf die inhaltliche Korrektheit geprüft hast.';
        $prozess3_value = 'Stelle ausführlich dar, warum deine Ergebnisse die gestellte Aufgaben vollumfänglich erfüllen.';
        //
        $prozessbericht = 'Erstelle zudem einen Prozessbericht, in dem die Vorgehensweise dargestellt wird.';
    //
    // Hilfetexte (Tooltip)
        $info1 = 'Je nach Kompetenzniveau sind unterschiedliche Operatoren vonnöten. Diese werden entsprechend der getroffenen Auswahl des geforderten Wissens durch den Aufgabengenerator in das folgende Textfeld eingesetzt.';
        $info2 = 'Auswahl eines passenden Operators.';
        $info3 = 'Im Zentrum des Interesses ist die Prozessbeschreibung, in der Quellennachweise elementar sind. Je nach Anspruchsniveau kann auch die fachliche Prüfung der recherchierten Inhalte gefordert werden oder auch der inhaltliche Abgleich der recherchierten Informationen mit der Aufgabenstellung.';
    //
    if (isset($_POST['art'])) {
        $ausgabe = '';
        $ausgabe .= 'Erstelle ';
        $ausgabe .= $_POST['sozialform'];
        $ausgabe .= ' ';
        $ausgabe .= $_POST['art'];
        $ausgabe .= ' mit dem Thema "';
        $ausgabe .= $_POST['thema'].'".';
        $ausgabe .= '<ul>';
        $ausgabe .= '<li>'.$_POST['teilaufgabe1'].'</li>';
        if ($_POST['wissen_b'] != '') {
            $ausgabe .= '<li>'.$_POST['teilaufgabe2'].'</li>';
        }
        if ($_POST['wissen_c'] != '') {
            $ausgabe .= '<li>'.$_POST['teilaufgabe3'].'</li>';
        }
        $ausgabe .= '</ul>';
        $ausgabe .= 'Der zeitliche Gesamtumfang deines Medienproduktes sollte in etwa '.$_POST['umfang'].' Minuten entsprechen.<br>';
        $opt1 = 'opt1';
        if ($_POST['prozess'] == $opt1) {
            $ausgabe .=  $prozessbericht.' '.$prozess1_value.'<br>';
            // Link für Prozessbericht-Vorlage
            $link_prozessbericht = '<a class="btn btn-primary" href="Prozessbericht1.docx" role="button">Vorlage für den Prozessbericht</a>';
        }
        $opt2 = 'opt2';    
        if ($_POST['prozess'] == $opt2) {
            $ausgabe .= $prozessbericht.' Berücksichtige dabei besonders folgende Punkte:';
            $ausgabe .= '<ul>';
            $ausgabe .= '<li>'.$prozess1_value.'</li>';
            $ausgabe .= '<li>'.$prozess2_value.'</li>';
            $ausgabe .= '</ul>';
            // Link für Prozessbericht-Vorlage
            $link_prozessbericht = '<a class="btn btn-primary" href="Prozessbericht2.docx" role="button">Vorlage für den Prozessbericht</a>';
        }
        $opt3 = 'opt3';
        if ($_POST['prozess'] == $opt3) {
            $ausgabe .= $prozessbericht.' Berücksichtige dabei besonders folgende Punkte:';
            $ausgabe .= '<ul>';
            $ausgabe .= '<li>'.$prozess1_value.'</li>';
            $ausgabe .= '<li>'.$prozess2_value.'</li>';
            $ausgabe .= '<li>'.$prozess3_value.'</li>';
            $ausgabe .= '</ul>';
            // Link für Prozessbericht-Vorlage
            $link_prozessbericht = '<a class="btn btn-primary" href="Prozessbericht3.docx" role="button">Vorlage für den Prozessbericht</a>'; 
        }
        
        $ausgabe .= 'Kriterien der Bewertung werden neben der ';
        if ($_POST['medienprodukt'] == $medienprodukt1_value) {
            require_once ('mp_praesentation.inc.php');
            $ausgabe .= $p;
        } elseif ($_POST['medienprodukt'] == $medienprodukt2_value) {
            require_once ('mp_video.inc.php');
            $ausgabe .= $p;
        } elseif ($_POST['medienprodukt'] == $medienprodukt3_value) {
            require_once ('mp_podcast.inc.php');
            $ausgabe .= $p;
        } else {
            require_once ('mp_audioguide.inc.php');
            $ausgabe .= $p;
        }
        $ausgabe .= ' und der technischen Umsetzung vor allem der zu erstellende Prozessbericht sein (= Bewertungskriterien für Inhalt und fachliche Richtigkeit).';
        //
        // Log-Datei
            $file = 'mp_aa.txt';
            $current = file_get_contents($file);
            $timestamp = time();
            $heute = date('d.m.Y', $timestamp);
            $current .= $heute.' - '.$ausgabe.PHP_EOL;
            $output = file_put_contents($file, $current);
        //
    }
?>

<!DOCTYPE html>
<html lang="de">
    
<head>
    <title>Bewertungstool (Aufgabengenerator)</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php
        echo $bootstrap_css;
        echo $bootstrap_js;
	    echo $bootstrap_icons;
    ?>

</head>

<body>
<div class="container p-5 my-5 border bg-light">
    <a href="../index.php"><img src="images/logo.png" class="float-end" height="75"></a>
    <h3 class="display-5">Bewertungstool (Aufgabengenerator)</h3>
    <p></p>

    <div class="row">
	    <div class="col">
		    <h3 class="display-8">Arbeitsauftrag generieren</h3>
            <small>Erfassung der Eckdaten:</small>
            <form class="was-validated" name="arbeitsauftrag" action="" method="POST">

                <div class="form-floating">
                    <select class="form-select" id="sozialform" name="sozialform" required="required">
                        <option></option>
                        <option value="<?php echo $sozialform1_value; ?>"><?php echo $sozialform1; ?></option>
                        <option value="<?php echo $sozialform2_value; ?>"><?php echo $sozialform2; ?></option>
                        <option value="<?php echo $sozialform3_value; ?>"><?php echo $sozialform3; ?></option>
                    </select>
                    <label for="art" class="form-label">Sozialform</label>
                </div>
                <br>
                <div class="form-floating">
                    <select class="form-select" id="art" name="art" required="required">
                        <option></option>
                        <option value="<?php echo $medienprodukt1_value; ?>"><?php echo $medienprodukt1; ?></option>
                        <option value="<?php echo $medienprodukt2_value; ?>"><?php echo $medienprodukt2; ?></option>
                        <option value="<?php echo $medienprodukt3_value; ?>"><?php echo $medienprodukt3; ?></option>
                        <option value="<?php echo $medienprodukt4_value; ?>"><?php echo $medienprodukt4; ?></option>
                    </select>
                    <label for="art" class="form-label">Art des Medienproduktes</label>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" name="umfang" id="umfang" required="required">
                    <label for="umfang">Zeitumfang (Dauer) des Medienproduktes in Minuten</label>
                </div>
                
                <div class="form-floating mb-3 mt-3">
					<input type="text" class="form-control" name="thema" required="required">
					<label for="thema">Thema des Medienprojektes</label>
				</div>
				
                <h5>Art des Wissens (Kompetenzniveau)</h5>
                <h6>1. Teilaufgabe (obligatorisch)</h6>
                <div class="form-floating">
                    <select class="form-select" id="wissen" name="wissen" required="required" data-bs-toggle="tooltip" title="<?php echo $info1; ?>" data-bs-placement="right" onchange="toggleTextDisplay1()">
                        <option></option>
                        <option value="<?php echo $wissen1_value; ?>"><?php echo $wissen1; ?></option>
                        <option value="<?php echo $wissen2_value; ?>"><?php echo $wissen2; ?></option>
                        <option value="<?php echo $wissen3_value; ?>"><?php echo $wissen3; ?></option>
                    </select>
                    <label for="wissen" class="form-label">Art des geforderten Wissens (Schwierigkeitsgrad)</label>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" name="teilaufgabe1" id="teilaufgabe1" required="required" data-bs-toggle="tooltip" title="<?php echo $info2; ?>" data-bs-placement="right" value="">
                    <label for="teilaufgabe1">Formulierung der Aufgabe</label>
                </div>

                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

                <script>
                    function toggleTextDisplay1() {
                    var selectField = document.getElementById("wissen");
                    var textfeld = document.getElementById("teilaufgabe1");

                    // Überprüfe den Index der ausgewählten Option
                    var selectedIndex = selectField.selectedIndex;

                    // Setze den Wert des Textfeldes basierend auf der ausgewählten Option
                    switch (selectedIndex) {
                        case 1:
                            textfeld.value = "<?php echo $wissen1_value; ?>";
                            break;
                        case 2:
                            textfeld.value = "<?php echo $wissen2_value; ?>";
                            break;
                        case 3:
                            textfeld.value = "<?php echo $wissen3_value; ?>";
                            break;
                        default:
                            break;
                    }
                }
                </script>

                <h6>2. Teilaufgabe (fakultativ)</h6>
                <div class="form-floating">
                    <select class="form-select" id="wissen_b" name="wissen_b" onchange="toggleTextDisplay2()">
                        <option></option>
                        <option value="<?php echo $wissen1_value; ?>"><?php echo $wissen1; ?></option>
                        <option value="<?php echo $wissen2_value; ?>"><?php echo $wissen2; ?></option>
                        <option value="<?php echo $wissen3_value; ?>"><?php echo $wissen3; ?></option>
                    </select>
                    <label for="wissen_b" class="form-label">Art des Wissens (Kompetenz)</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" name="teilaufgabe2" id="teilaufgabe2" value="">
                    <label for="teilaufgabe2">Formulierung der Aufgabe</label>
                </div>
                
                <script>
                    function toggleTextDisplay2() {
                    var selectField = document.getElementById("wissen_b");
                    var textfeld = document.getElementById("teilaufgabe2");

                    // Überprüfe den Index der ausgewählten Option
                    var selectedIndex = selectField.selectedIndex;

                    // Setze den Wert des Textfeldes basierend auf der ausgewählten Option
                    switch (selectedIndex) {
                        case 1:
                            textfeld.value = "<?php echo $wissen1_value; ?>";
                            break;
                        case 2:
                            textfeld.value = "<?php echo $wissen2_value; ?>";
                            break;
                        case 3:
                            textfeld.value = "<?php echo $wissen3_value; ?>";
                            break;
                        default:
                            break;
                    }
                }
                </script>

                <h6>3. Teilaufgabe (fakultativ)</h6>
                <div class="form-floating">
                    <select class="form-select" id="wissen_c" name="wissen_c" onchange="toggleTextDisplay3()">
                        <option></option>
                        <option value="<?php echo $wissen1_value; ?>"><?php echo $wissen1; ?></option>
                        <option value="<?php echo $wissen2_value; ?>"><?php echo $wissen2; ?></option>
                        <option value="<?php echo $wissen3_value; ?>"><?php echo $wissen3; ?></option>
                    </select>
                    <label for="wissen_c" class="form-label">Art des Wissens (Kompetenz)</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" name="teilaufgabe3" id="teilaufgabe3" value="">
                    <label for="teilaufgabe3">Formulierung der Aufgabe</label>
                </div>

                <script>
                    function toggleTextDisplay3() {
                    var selectField = document.getElementById("wissen_c");
                    var textfeld = document.getElementById("teilaufgabe3");

                    // Überprüfe den Index der ausgewählten Option
                    var selectedIndex = selectField.selectedIndex;

                    // Setze den Wert des Textfeldes basierend auf der ausgewählten Option
                    switch (selectedIndex) {
                        case 1:
                            textfeld.value = "<?php echo $wissen1_value; ?>";
                            break;
                        case 2:
                            textfeld.value = "<?php echo $wissen2_value; ?>";
                            break;
                        case 3:
                            textfeld.value = "<?php echo $wissen3_value; ?>";
                            break;
                        default:
                            break;
                    }
                }
                </script>

                <br>
                <h5>Kriterien für den Prozessbericht</h5>
                <div class="form-floating mb-3 mt-3">
                    <select class="form-select" id="prozess" name="prozess" required="required" data-bs-toggle="tooltip" title="<?php echo $info3; ?>" data-bs-placement="right">
                        <option></option>
                        <option value="opt1"><?php echo $prozess1; ?></option>
                        <option value="opt2"><?php echo $prozess2; ?></option>
                        <option value="opt3"><?php echo $prozess3; ?></option>
                    </select>
                    <label for="prozess" class="form-label">Kriterien für den Prozessbericht</label>
                </div>

                <br>

                <script>
                    // Initialize tooltips
                    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                    })
                </script>

                <button type="submit" class="btn btn-success" name="submit" id="submit">Arbeitsauftrag generieren</button> 
			
            </form>

        </div>

        <div class="col">
                <?php
                    if ($ausgabe != '') {
                        echo '<h3 class="display-8">Formulierungsvorschlag für den Arbeitsauftrag</h3>';
                        echo '<div id="htmlString">'.$ausgabe.'<br></div>';
                        // Button zum Kopieren des HTML-Strings
                        echo '<p><button type="button" class="btn btn-outline-secondary" onclick="kopiereHtmlString()">';
                        echo '<i class="bi bi-clipboard"></i>';
                        echo '</button></p>';
                            echo '<script>';
                                echo 'function kopiereHtmlString() {';
                                    // Element mit dem HTML-String auswählen
                                    echo 'var htmlElement = document.getElementById("htmlString");';
                                    // Textbereich erstellen und den HTML-String zuweisen
                                    echo 'var textArea = document.createElement("textarea");';
                                    // mit HTML-Tags
                                    // echo 'textArea.value = htmlElement.innerHTML;';
                                    // ohne HTML-Tags
                                    echo 'textArea.value = htmlElement.textContent;';
                                    // Body-Element auswählen und den Textbereich hinzufügen
                                    echo 'document.body.appendChild(textArea);';
                                    // Textbereich auswählen und seinen Inhalt auswählen
                                    echo 'textArea.select();';
                                    // Inhalt in die Zwischenablage kopieren
                                    echo 'document.execCommand("copy");';
                                    // Textbereich entfernen, da er nicht mehr benötigt wird
                                    echo 'document.body.removeChild(textArea);';
                                    // Benutzer benachrichtigen
                                    echo 'alert("Der Aufgabenvorschlag wurde in die Zwischenablage kopiert.");';
                                echo '}';
                            echo '</script>';
                        echo '<p>'.$link_prozessbericht.' <a class="btn btn-warning" href="mp_aa.php" role="button"><i class="bi bi-plus-circle"></i></a></p>';
                    } else {
                        // echo '<h3 class="display-8"></h3>';
                        echo '<p><button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#anleitung">Erläuterung</button></p>';
                    }
                ?>
            
        </div>
    </div>
</div>


<div class="modal" id="anleitung">
    <div class="modal-dialog">
    <div class="modal-content">
        
    <div class="modal-header">
        <h4 class="modal-title">Erläuterung</h4>
    </div>
        
	<div class="modal-body">
        <h5>Ausgangspunkt/Annahme</h5>
            <p class="text-danger">Jedes Ergebnis einer Aufgabe zur Medienproduktion kann auch durch eine KI erzeugt werden. Im Zentrum einer Bewertung eines Medienprojektes ist daher die Prozessbeschreibung.</p>
        <h5>Vorüberlegungen</h5>
            <ul>
                <li>Arbeitsaufträge, die mit Hilfe von Digitalisierung umgesetzt werden sollen, beinhalten prozessorientierte Lernziele; Medien dienen lediglich als Mittel zum Zweck.</li>
                <li>Es gilt, den Lerngegenstand exakt zu definieren, um daraus in Bezug auf die Rahmenbedingungen, die Formulierung und die Bewertung konkrete Gestaltungsansätze auszuwählen.</li>
            </ul>
        <h5>Formulierung von Arbeitsaufträgen</h5>
            <ul>
                <li>Verwendnung eindeutiger Operatoren</li>
                    <ul>
                        <li>auflisten, benennen</li>
                        <li>erklären, zusammenfassen</li>
                        <li>durchführen, berechnen</li>
                        <li>vergleichen, unterscheiden</li>
                        <li>begründen, prüfen</li>
                        <li>konzipieren, entwickeln</li>
                    </ul>
                <li>Auswirkung auf das Verständnis der Aufgabe haben</li>
                    <ul>
                        <li>der Lebensweltbezug/Realitätsbezug (abstrakt, konstruiert, real)</li>
                        <li>und die sprachliche Komplexität (einfach | durchschnittlich | hoch); je einfacher, desto verständlicher für den Schüler, was von ihm erwartet wird.</li>
                    </ul>
                <li>Definition des Schwierigkeitsgrades: einfach | durchschnittlich | schwierig</li>
            </ul>        
    </div>
</body>
</html>
