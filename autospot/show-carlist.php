
<?php 
            $mysqli = new mysqli('localhost', 'root', '', 'autospot_db');
            $mysqli->set_charset("utf8");
            $result = $mysqli->query("SELECT * FROM cars") or die($mysqli->error);
        // pre_r($result);
    ?>

<section class="showcase">
    <table cellpadding="20">
       
        <?php
                 while ($row = $result->fetch_assoc()) : ?>

                <tr>
                    <td><?php echo "<a href='#'><img src='images/".$row['car_image']."' alt='car image'></a>" ;?></td>
                    <td class="carTitle"><?php echo '<a href="offer.php?offer_id='.$row['id'].'">'.$row['brand']; echo " "; echo  $row['model']; echo " "; echo $row['eddition'].'</a>'; ?></td>
                    <td class="carYear"><?php echo $row['car_year']; ?></td>
                    <td class="carMileage"><?php echo $row['mileage']; echo 'км' ?></td>
                    <td class="carPrice"><?php echo $row['price']; echo '<br><span>лева</span>'?></td>
                    <td class="carCity"><?php echo $row['city']; ?></td>
                </tr>
                
        <?php endwhile; ?>
        
   
    </div>
    </table>
  
</section>