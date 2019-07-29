<?php 

    //connect di Database
    $mysqli = new mysqli ('localhost', 'root', '', 'autospot_db') or die (mysqli_error($mysqli));
    $mysqli->set_charset('utf8'); //set charset



    //input fields varibles
    $make = "";
    $model = "";
    $eddition = "";
    $car_type = "";
    $car_year = "";
    $transmition = "";
    $wheel = "";
    $color = "";
    $fuel = "";
    $mileage = "";
    $power = "";
    $city = "";
    $price = "";
    $imageLayer = "";

    function resize_image($resourceType, $image_width, $image_height){
        $resizedWidth = 250;
        $resizeHeight = 250;
        $imageLayer = imagecreatetruecolor($resizedWidth, $resizeHeight);
        imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizedWidth,$resizeHeight,$image_width,$image_height);
        return $imageLayer;
    }

    
      



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
        $price = $_POST['price'];
        
        

        //upload image target
        

        //get the required data for the images
            


        
        $image = $_FILES['image']['name'];

        //resize image 
        $imageProcess = 0;
        if(is_array($_FILES)){
            $fileName = $_FILES['image']['tmp_name']; 
            $sourceProperties = getimagesize($fileName);
            $resizeFileName = time();
            $uploadPath = "./images/";
            $fileExt = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $uploadImageType = $sourceProperties[2];
            $sourceImageWidth = $sourceProperties[0];
            $sourceImageHeight = $sourceProperties[1];

            switch($uploadImageType){
                case IMAGETYPE_JPEG: 
                    $resourceType = imagecreatefromjpeg($fileName);
                    $imageLayer = resize_image($resourceType, $sourceImageWidth, $sourceImageHeight);
                    imagejpeg($imageLayer, $uploadPath."thump_".$resizeFileName.'.'. $fileExt);
                    break;

                case IMAGETYPE_GIF: 
                    $resourceType = imagecreatefromgif($fileName);
                    $imageLayer = resize_image($resourceType, $sourceImageWidth, $sourceImageHeight);
                    imagegif($imageLayer, $uploadPath."thump_".$resizeFileName.'.'. $fileExt);
                    break;

                case IMAGETYPE_PNG: 
                    $resourceType = imagecreatefrompng($fileName);
                    $imageLayer = resize_image($resourceType, $sourceImageWidth, $sourceImageHeight);
                    imagepng($imageLayer, $uploadPath."thump_".$resizeFileName.'.'. $fileExt);
                    break;

                default:
                    $imageProcess = 0;
            }

            $mysqli->query("INSERT INTO cars (brand, model, eddition, car_type, car_year, transmition, wheel, colour, fuel, mileage, engine_power, car_description, city, price, car_image) 
            VALUES('$make', '$model', '$eddition', '$car_type', '$car_year', '$transmition', '$wheel', '$color', '$fuel', '$mileage', '$power', '$description', '$city', '$price', '$image')") or die ($mysqli->error);

            move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath. $resizeFileName.'.'.$fileExt);
            $imageProcess = 1;
        }

        
        
        

        if($imageProcess == 1){
            
            
            header("location: success.php");

        }
        
       
    }

?>