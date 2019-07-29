
<?php 

            require_once 'delete.php';
            include 'includes/header.html';
            $mysqli = new mysqli('localhost', 'root', '', 'autospot_db');
            $mysqli->set_charset("utf8");
                
            $result = $mysqli->query("SELECT * FROM cars ") or die($mysqli->error);
        // pre_r($result);
    ?>
<div class="heading">
    <h2>Моите обяви</h2>
</div>
<section id="myOffersSection">
   
    <table cellpadding="20" class="myOffersTable">
       
        <?php
                 while ($row = $result->fetch_assoc()) : ?>

                <tr>
                    <td ><?php echo "<img src='images/".$row['car_image']."' alt='car image'>" ;?></td>
                    <td class="carTitle"><?php echo $row['brand']; echo " "; echo  $row['model']; echo " "; echo $row['eddition']; ?></td>
                    <td class="carType"><?php echo $row['car_type']; ?></td>
                    <td class="carYear"><?php echo $row['car_year']; ?></td>
                    <td class="carMileage"><?php echo $row['mileage']; echo 'км' ?></td>
                    <td class="carPrice"><?php echo $row['price']; echo ' лв'?></td>
                    <td class="carCity"><?php echo $row['city']; ?></td>
                    <td><a href="my-offers.php?delete=<?php echo $row['id'];?>" id="delete-btn">Изтриване</a></td>
                </tr>
                
        <?php endwhile; ?>
        
   
    </div>
    </table>
  
</section>