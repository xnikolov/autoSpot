<?php 

    //connect di Database
    $mysqli = new mysqli ('localhost', 'root', '', 'autospot_db') or die (mysqli_error($mysqli));
    $mysqli->set_charset('utf8'); //set charset

    //input fields varibles
    $make = "";
    $model = "";
    $car_type = "";
    $car_year = "";
    $transmition = "";
    $wheel = "";
    $color = "";
    $fuel = "";
    $power = "";
    $city = "";
    $price = "";
    $i = 0;



    //add new car function
    if(isset($_POST['add'])){
        $make = $_POST['make'];
        $model = $_POST['model'];
        $eddition = $_POST['eddition'];
        $car_type = $_POST['car_type'];
        $car_year = $_POST['year'];
        $transmition = $_POST['transmition'];
        $wheel = $_POST['wheel'];
        $color = $_POST['color'];
        $fuel = $_POST['fuel'];
        $mileage = $_POST['mileage'];
        $power = $_POST['power'];
        $description = $_POST['description'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
        $price = $_POST['price'];

        

        $mysqli->query("INSERT INTO cars (brand, model, eddition, car_type, car_year, transmition, wheel, colour, fuel, mileage, engine_power, car_description, city, phone, price) 
        VALUES ('$make', '$model', '$eddition', '$car_type', '$car_year', '$transmition', '$wheel', '$color', '$fuel', '$mileage', '$power', '$description', '$city', $phone, '$price' )") or die ($mysqli->error);

        //upload image target
        /*$fileName = $_FILES['img']['name'];*//*
        $tmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];*/

        // File upload configuration
    $targetDir = "images/";
    $allowTypes = array('jpg','png','jpeg','gif');
    
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['img']['name']))){
        foreach($_FILES['img']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['img']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["img"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $insertValuesSQL .= "('".$fileName."', NOW()),";
                }else{
                    $errorUpload .= $_FILES['img']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['img']['name'][$key].', ';
            }
        }
        
        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
            $insert = $mysqli->query("INSERT INTO images (slideName, slideImage) VALUES $insertValuesSQL");
            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $statusMsg = "Files are uploaded successfully.".$errorMsg;
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }
    
    // Display status message
    echo $statusMsg;
}
?>