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

        //upload image target
        $target = 'images/'.basename($_FILES['image']['name']);

        //get the required data for the images
        $image = $_FILES['image']['name'];


        $mysqli->query("INSERT INTO cars (brand, model, eddition, car_type, car_year, transmition, wheel, colour, fuel, mileage, engine_power, car_description, city, phone, price, car_image) 
        VALUES ('$make', '$model', '$eddition', '$car_type', '$car_year', '$transmition', '$wheel', '$color', '$fuel', '$mileage', '$power', '$description', '$city', $phone, '$price', '$image')") or die ($mysqli->error);

        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            header("location: success.php");
        }

        
        

     }

?>