<?php
    require_once('../controller/dbconfig.php');

    $Id=$_POST['id'];
    $Name = $_POST['name'];
    $Price = $_POST['price'];
    $Quantity = $_POST['quantity'];
    $Category = $_POST['category'];
    $Description = $_POST['description'];
    $Arrivedate = $_POST['arrivedate']; 
    //$Image = $_POST['image'];
    
    $sql = "Update products set pname='$Name',price=$Price,quantity=$Quantity,description='$Description',category='$Category',arrived_date=
    '$Arrivedate' where pid=$Id";

    echo "$sql";
    $result = $conn->query($sql);
    if(!$result){
        echo "Not Insert";
    }
    else{
        echo "Inserted";
    }
    header("refresh:2; url=form_component.php");
?>
    
