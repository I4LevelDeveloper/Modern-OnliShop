<?php
/**
 * Created by PhpStorm.
 * User: KeSeyha
 * Date: 6/9/2017
 * Time: 5:01 PM
 */
session_start();
if (isset($_SESSION['userid'])) {
    setcookie('userid', '', time()-3600);
    session_destroy();
}
header("location: index.php");