<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
<?php
header("Location: mp_start.php");
?>
</html>
