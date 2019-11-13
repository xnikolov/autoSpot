<head>
<link rel="stylesheet" href="css/showCar/show-car.css">
</head>
<?php 
            $mysqli = new mysqli('localhost', 'root', '', 'autospot_db');
            $mysqli->set_charset("utf8");
            $result = $mysqli->query("SELECT * FROM cars") or die($mysqli->error);
        // pre_r($result);
?>

<script>
     let colorBox = document.getElementById('colorBox');
     let colorBoxTd = document.getElementById('car-color');

    function pickColor(){
        if(colorBox.innerHTML == 'Червен'){
            colorBoxId.style.background = 'red';
        }

    }
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 ">
                        <?php
                        while ($row = $result->fetch_assoc()) : ?>
            <div class="table-responsive">
                <table class="table table-image">
                    <tbody>
                    <tr class="top-content">
                        <td class="image"><?php echo "<a href='offer.php?offer_id=".$row['id']."'><img class='my-auto' src='images/".$row['car_image']."' alt='car image'></a>" ;?></td> 
                        <td class="carTitle" colspan="2"><?php echo '<h4 class="pt-3"><a href="offer.php?offer_id='.$row['id'].'">'.$row['brand']; echo " "; echo  $row['model']; echo " "; echo '<br><span class="eddition py-1 px-2">' . $row['eddition'].'</span></a></h4>'; ?></td>
                    </tr>
                </tbody>
            </div>
            <div class="table-responsive">
                <table class="table table-image">
                    <tbody>
                        <tr class="mid-content">
                            <td class="carPrice"><p class="priceTag text-center"><?php echo '<b>' . $row['price'].'</b>';  echo '<br><span>лева</span>'?></p><td>
                            <td class="carCity"><p class="text-center"><?php echo $row['city']; ?></p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <table class="table table-image">
                    <tbody>
                        <tr class="bottom-content d-flex justify-content-between">
                            <td class="carYear"><p class="bottomInfoText text-center"><?php echo $row['car_year'] . ' година'; ?></p></td> 
                            <td class="carMilleage"><p class="bottomInfoText text-center"><?php echo $row['mileage'] . ' км'; ?></p></td> 
                            <td class="carColor" id="car-color"><p class="bottomInfoText text-center" id="colorBox"><?php echo $row['colour']?></p></td>
                        </tr>
                    </tbody>
                </table>
                <?php endwhile; ?>
    
            </div>        
         </div>
         
    </div>
 </div>
    
