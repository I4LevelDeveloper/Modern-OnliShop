<?php
/**
 * Created by PhpStorm.
 * User: KeSeyha
 * Date: 6/8/2017
 * Time: 11:00 PM
 */

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
require_once('dbconfig.php');
require_once('key.php');
$password = crypt($password, KEY_SALT);

$sql = "select userid from users where email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('Location: ../register.php');
}else{
    $sql = "insert into users (firstname, lastname, email, password) values('$firstname', '$lastname', '$email', '$password')";
    $result = $conn->query($sql);
    if($result){
        header('Location: ../signin.php');
    }else{
        header('Location: ../register.php');
    }
}