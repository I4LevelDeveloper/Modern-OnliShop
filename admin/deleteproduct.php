<?php
	$id = $_GET['id'];
	require_once('../controller/dbconfig.php');
	$sql = "delete from products where pid = '$id'";

	$result = $conn->query($sql);

	header('location: form_component.php');
?>
