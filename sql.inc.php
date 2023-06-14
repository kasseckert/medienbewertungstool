<?php
// Herstellung der Datenbankverbindung
error_reporting(E_ALL);
define ('MYSQL_HOST','Host Datenbank');
define ('MYSQL_BENUTZER','Benutzername');
define ('MYSQL_KENNWORT','Passwort');
define ( 'MYSQL_DATENBANK','Datenbankname');
$db_link = mysqli_connect (MYSQL_HOST, 
                           MYSQL_BENUTZER, 
                           MYSQL_KENNWORT, 
                           MYSQL_DATENBANK);
mysqli_set_charset($db_link, 'utf8');
// PDF-Erstellung
$pdfAuthor  = 'Christoph Kasseckert';
// Einbindung Bootstrap im Header
$bootstrap_css = '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">';
$bootstrap_js = '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>';
// Google Symbole
$symbol = '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />';
?>