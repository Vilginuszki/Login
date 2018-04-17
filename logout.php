<?php
/**
 * Created by PhpStorm.
 * User: Me
 * Date: 17.04.2018
 * Time: 14:58
 */
session_start();
session_destroy();
echo "You are logged out!<br/>Click <a href='index.php'>HERE</a> to go return";
