<?php

    $mysqli = new mysqli('localhost', 'root', '', 'autospot_db')  or die (mysqli_error($mysqli));
    $mysqli->set_charset('utf8');

    $update = false;

    $id = 0;

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM cars WHERE id='$id'") or die($mysqli->error);

        $row = $result->fetch_array();

        $make = $row['brand'];
        $model = $row['model'];
        $eddition = $row['eddition'];
        $car_type = $row['car_type'];
        $car_year = $row['car_year'];
        $transmition = $row['transmition'];
        $wheel = $row['wheel'];
        $color = $row['colour'];
        $fuel = $row['fuel'];
        $mileage = $row['mileage'];
        $power = $row['engine_power'];
        $description = $row['car_description'];
        $city = $row['city'];
        $phone = $row['phone'];
        $price = $row['price'];
        
    }


?>