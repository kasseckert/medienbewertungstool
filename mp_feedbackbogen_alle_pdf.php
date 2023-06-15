<?php
require_once ('sql.inc.php');
require_once ('tcpdf/tcpdf.php');
$id_passwort = (int) ($_GET['passwort']);

//$header = '<img src="images/logo.png" height="100">';
$pdfName = "MP_Feedbackbogen.pdf";

$eintraege = $db_link->query("SELECT * FROM medienprojekt_ergebnisse WHERE passwort='$id_passwort' ORDER BY name ASC");

$html = '';

while ($zeile = $eintraege->fetch_object()) {
    $gesamt = $zeile->item1 + $zeile->item2 + $zeile->item3 + $zeile->item4;
    $html .= '<p align="right"><img src="images/logo.png" height="75"></p>';
    $html .= '<h1>Feedbackbogen zum Medienprojekt</h1>';
    $html .= '<h3>für '.$zeile->vorname.' '.$zeile->name.'</h3>'.$zeile->feedback.'<h3>Gesamt '.$gesamt.'/20 Punkte</h3><p></p><p></p>';
    $html .= '<p>________________________________________<br>';
    $html .= '<small>Unterschrift Lehrkraft</small></p>';
    $html .= '<br pagebreak="true" />';
}

// Erstellung des PDF Dokuments
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Horizonatle Linien oben und unten ausblenden
$pdf->setPrintHeader(false); 
$pdf->setPrintFooter(false); 

// Dokumenteninformationen
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor($pdfAuthor);
$pdf->SetTitle('Projekt');
$pdf->SetSubject('Projekt');

// Header und Footer Informationen
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Auswahl des Font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// Auswahl der MArgins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Automatisches Autobreak der Seiten
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Image Scale 
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Schriftart
$pdf->SetFont('helvetica', '', 10);
// https://www.xml-convert.com/en/convert-tff-font-to-afm-pfa-fpdf-tcpdf
// $pdf->SetFont('rotis', '', 12);

// Neue Seite
$pdf->AddPage();

// Fügt den HTML Code in das PDF Dokument ein
$pdf->writeHTML($html, true, false, true, false, '');

//Ausgabe der PDF

//Variante 1: PDF direkt an den Benutzer senden:
$pdf->Output($pdfName, 'I');

//Variante 2: PDF im Verzeichnis abspeichern:
//$pdf->Output(dirname(__FILE__).'/'.$pdfName, 'F');
//echo 'PDF herunterladen: <a href="'.$pdfName.'">'.$pdfName.'</a>';

?>