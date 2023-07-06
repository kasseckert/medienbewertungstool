<?php
//require_once ('../sql.inc.php');
require_once ('../tcpdf/tcpdf.php');

//$header = '<img src="images/logo.png" height="100">';
$pdfName = "MP_Bewertungsschluessel.pdf";

$html = '
<p align="right"><img src="images/logo.png" height="75"></p>
<h1>Bewertungsschlüssel</h1>
<table class="tg">
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-m0ac{background-color:#656565;color:#ffffff;font-weight:bold;text-align:center;vertical-align:top}
.tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:top}
</style>
<thead>
  <tr>
    <th class="tg-m0ac">Punkte</th>
    <th class="tg-m0ac">Note</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-baqh">20 - 18</td>
    <td class="tg-amwm">1</td>
  </tr>
  <tr>
    <td class="tg-baqh">17 - 15</td>
    <td class="tg-amwm">2</td>
  </tr>
  <tr>
    <td class="tg-baqh">14 - 12</td>
    <td class="tg-amwm">3</td>
  </tr>
  <tr>
    <td class="tg-baqh">11 - 9</td>
    <td class="tg-amwm">4</td>
  </tr>
  <tr>
    <td class="tg-baqh">8 - 5</td>
    <td class="tg-amwm">5</td>
  </tr>
  <tr>
    <td class="tg-baqh">4 - 0</td>
    <td class="tg-amwm">6</td>
  </tr>
</tbody>
</table>
';


// Erstellung des PDF Dokuments
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Horizonatle Linien oben und unten ausblenden
$pdf->setPrintHeader(false); 

// Dokumenteninformationen
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor($pdfAuthor);
$pdf->SetTitle('Bewertungsschluessel');
$pdf->SetSubject('Bewertungsschluessel');

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
// $pdf->SetFont('rotis', '', 14);

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