
/**
* Created by PhpStorm.
* User: Liheang CHEA
* Date: 6/16/2017
* Time: 2:49 PM
*/
<?php


require_once('dbconfig.php');
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$date = date("Y-m-d");

$sql=" insert into feedback (name, email, subject, message, date) values('$name', '$email', '$subject', '$message', '$date')";
$result=$conn->query($sql);
if ($result) {
    header("Location: ../index.php");

}else {
    header("location: ../contact.php");

}

header("Location: ../index.php");

?>