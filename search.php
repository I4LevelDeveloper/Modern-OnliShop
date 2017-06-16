<?php
/**
 * Created by PhpStorm.
 * User: KeSeyha
 * Date: 6/15/2017
 * Time: 11:27 PM
 */
if(isset($_GET['search']) && $_GET['search'] != ""){
    $search = $_GET['search'];
    require_once ('dbconfig.php');


    $sql = "select * from products where pname = '%$search%'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_object()){

        }
    }
}else{
    header("location ");
}

