<?php
/**
 * Created by PhpStorm.
 * User: KeSeyha
 * Date: 6/8/2017
 * Time: 10:36 PM
 */
if(isset($_POST['email']) && $_POST['email']!=''){
    $email = $_POST['email'];
    $password = $_POST['password'];
    require_once('dbconfig.php');
    require_once('key.php');
    $password = crypt($password, KEY_SALT);
    $sql = "select userid from users where email = '$email' and password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $userid = $result->fetch_object()->userid;
        session_start();
        $_SESSION['userid'] = $userid;
        if($_POST['checkbox'] == 'r'){
            setcookie('userid', $userid, time()+60*60*24);
        }
        header('Location: ../index.php');
    }else{
        $false = 'Incorrect username or password';
        $_SESSION['false'] = $false;
        header('Location: ../signin.php');
    }
}else{
    header('Location: ../signin.php');
}