<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 17.04.2018
 * Time: 14:51
 */
session_start();
if(!isset($_SESSION['uname'])){
    die("You need to login to view this page<br/>Click <a href='login.html'>HERE</a> to login");
}
echo ("Welcome back ".$_SESSION['uname']."!<br/><a href='logout.php'><button>Logout</button></a>");