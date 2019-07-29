<?php
$id = 0;

//connect di Database
$mysqli = new mysqli ('localhost', 'root', '', 'autospot_db') or die (mysqli_error($mysqli));
$mysqli->set_charset('utf8'); //set charset

if(isset($_GET['delete'])){ 
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM cars WHERE id=$id") or die($mysqli->error);

    
    header("location: my-offers.php");

}
?>
