<?php
    $uploadDir = "../images/";
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = filesize($fileTmpName);
    
    $date = new DateTime();
    $timestamp = $date->getTimestamp();

    $target = $uploadDir.$timestamp.".".pathinfo($fileName)['extension'];
    //Check if file is bigger than 5MB
    if($fileSize <= 5242880){
        $fileExtension = pathinfo($fileName)['extension'];
        if(in_array($fileExtension, ['jpg', 'png'])){
            if(move_uploaded_file($fileTmpName, $target)){
                // echo "File is uploaded successfully!";
                require_once('../controller/dbconfig.php');

                $Name = $_POST['name'];
                $Price = $_POST['price'];
                $Quantity = $_POST['quantity'];
                $Category = $_POST['category'];
                $Description = $_POST['description'];
                $Arrivedate = $_POST['arrivedate']; 
                
                $sql = "INSERT INTO products (pname, price, quantity, description, category, arrived_date, image1) VALUES ('$Name',$Price, $Quantity,'$Description','$Category','$Arrivedate', '$target')";

                $result = $conn->query($sql);
                if($result){
                    header('Location: form_component.php');
                }
            }else{
                echo "File is fail to upload!";
            }
        }else{
            echo "Only jpg/png are allowed";
        }
    }else{
        echo "File is bigger thant 5M - file size is ".number_format($fileSize/1024/1024, 2)."MB";
    }



