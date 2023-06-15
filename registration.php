<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Registrieren</title>
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
                // If form submitted, insert values into the database.
                if (isset($_REQUEST['username'])){
                        // removes backslashes
                        $username = stripslashes($_REQUEST['username']);
                        //escapes special characters in a string
                        $username = mysqli_real_escape_string($db_link,$username); 
                        $email = stripslashes($_REQUEST['email']);
                        $email = mysqli_real_escape_string($db_link,$email);
                        $password = stripslashes($_REQUEST['password']);
                        $password = mysqli_real_escape_string($db_link,$password);
                        $trn_date = date("Y-m-d H:i:s");
                        $query = "INSERT into `bewertungstool_nutzer` (username, password, email, trn_date)
                VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
                        $result = mysqli_query($db_link,$query);
                        if($result){
                        echo '<div class="form"><h3 class="display-5">Die Regiertrierung war erfolgreich.</h3><br/><a href="login.php">anmelden</a></div>';
                        }
                } else {
                ?>
                <div class="form">
                <h3 class="display-5">Registrieren</h3>
                <form name="registration" action="" method="post">
                <p><input type="text" name="username" placeholder="Benutzername" required /></p>
                <p><input type="email" name="email" placeholder="E-Mail-Adresse" required /></p>
                <p><input type="password" name="password" placeholder="Passwort" required /></p>
                <p><input type="submit" name="submit" value="registrieren" /></p>
                </form>
                </div>
                <?php } ?>
    </div>
</body>
</html>
