<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 17.04.2018
 * Time: 14:29
 */
/*
 * Run it if its first time:
 * $f = fopen("users.txt", "w");
 * fwrite($f, "admin:admin");
 * fclose($f);
 *
 */
$f = fopen("users.txt", "r");
$wip = fread($f,20);
$loginAndPass = explode(":",$wip); // Split string for login and password
if ($_POST['uname']=== $loginAndPass[0] && $_POST['psw']=== $loginAndPass[1]){
    session_start();
    $_SESSION['uname']= $loginAndPass[0];
    echo "YOU ARE LOGGED IN! <br/>Click <a href='index.php'>HERE</a> to return";
}
else echo "WRONG PASSWORD OR LOGIN, TRY AGAIN <a href='login.html'>HERE</a>";

