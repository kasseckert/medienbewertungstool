<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Anmeldung</title>
<?php
require_once ('sql.inc.php');
echo $bootstrap_css;
echo $bootstrap_js;
?>
</head>
<body>
	<div class="container p-5 my-5 border bg-light">
		<?php
		require('sql.inc.php');
		session_start();
		// If form submitted, insert values into the database.
		if (isset($_POST['username'])){
				// removes backslashes
			$username = stripslashes($_REQUEST['username']);
				//escapes special characters in a string
			$username = mysqli_real_escape_string($db_link,$username);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($db_link,$password);
			//Checking is user existing in the database or not
			$query = "SELECT * FROM `bewertungstool_nutzer` WHERE username='$username' AND password='".md5($password)."'";
			$result = mysqli_query($db_link,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
				if($rows==1){
				$_SESSION['username'] = $username;
				// Redirect user to index.php
				header("Location: index.php");
				} else {
				echo '<div class="form"><h3 class="display-5">Benutzername/Passwort fehlerhaft.</h3><br/><a href="login.php">Anmeldung</a></div>';
				}
			} else {
		?>
		<div class="form">
		<h3 class="display-5">Anmeldung</h3>
		<form action="" method="post" name="login">
		<p><input type="text" name="username" placeholder="Benutzername" required /></p>
		<p><input type="password" name="password" placeholder="Passwort" required /></p>
		<p><input name="submit" type="submit" value="anmelden" /></p>
		</form>
		<p><a href='registration.php'>Registrierung</a></p>
		</div>
		<?php } ?>
	</div>
</body>
</html>
