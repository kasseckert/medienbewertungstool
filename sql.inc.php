<?php
// Zugangsdaten Datenbank
$dbname = 'db84947';
$dbuser = 'u84947';
$dbpassword = 'h3xG7xQa3fTh7Mvk';
$dbhost = 'mysql05.manitu.net';
// Herstellung der Datenbankverbindung
error_reporting(E_ALL);
define ('MYSQL_HOST','mysql05.manitu.net');
define ('MYSQL_BENUTZER','u84947');
define ('MYSQL_KENNWORT','h3xG7xQa3fTh7Mvk');
define ( 'MYSQL_DATENBANK','db84947');
$db_link = mysqli_connect (MYSQL_HOST, 
                           MYSQL_BENUTZER, 
                           MYSQL_KENNWORT, 
                           MYSQL_DATENBANK);
mysqli_set_charset($db_link, 'utf8');
$sql = $db_link->query('SELECT * FROM config');
//$result = $db_link->query($sql);
while ($row = $sql->fetch_object()){
	$id_db = $row->id;
    $bu_db = $row->bu;
    $rsd_db = $row->rsd;
    $rsk_db = $row->rsk;
    $zwrsk_db = $row->zwrsk;
    $berr1_db = $row->berr1;
    $berr2_db = $row->berr2;
    $berr3_db = $row->berr3;
    $berr4_db = $row->berr4;
	}
// Versionsnummer
$version = 'v0.7.22';
// Beurteilungszeitraum
$id_config = $id_db;
$bu = $bu_db;
// Mitglieder der Schulleitung
$rsd = $rsd_db;
$rsk = $rsk_db;
$zwrsk = $zwrsk_db;
$berr1 = $berr1_db;
$berr2 = $berr2_db;
$berr3 = $berr3_db;
$berr4 = $berr4_db;
// PDF-Erstellung
$pdfAuthor  = 'Christoph Kasseckert';
// Einbindung Bootstrap im Header
$bootstrap_css = '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">';
$bootstrap_js = '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>';
// Einbindung von https://datatables.net/download/ für sortierbare Tabellen 
// (Anleitung: https://datatables.net/manual/installation)
$datatables_css = '<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>';
$datatables_js = '<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>';
$datatables_script = '
<script>
document.addEventListener("DOMContentLoaded", function () {
    let table = new DataTable("#datatable", {
    language: {url: "https://cdn.datatables.net/plug-ins/1.11.5/i18n/de-DE.json",},
    paging: false,
    scrollCollapse: false,
    });
});
</script>';
$datatables_jquery = '<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>';
// Google Symbole
$symbol = '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />';
?>