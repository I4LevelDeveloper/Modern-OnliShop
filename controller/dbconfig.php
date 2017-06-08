<?php
/**
 * Created by PhpStorm.
 * User: KeSeyha
 * Date: 6/8/2017
 * Time: 10:45 PM
 */
define("HOST_NAME", "127.0.0.1");
define("USER_NAME", "root");
define("PASSWORD", "");
define("DB_NAME", "modern-onlishop");

$conn = new mysqli(HOST_NAME, USER_NAME, PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}