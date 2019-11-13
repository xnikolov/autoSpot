<?php
    $mysql =  new mysqli ('localhost', 'root', '', 'autospot_db') or die (mysqli_error($mysql));
    $mysql->set_charset('utf8');
    $result = $mysql->query("SELECT * FROM cars WHERE id=".$_REQUEST['offer_id']);
?>

<script>
    function goBack(){
        window.history.back();
    }
</script>

<?php
    include 'includes/header.html';
?>

<div class="container offerContainer">
    <div class="row border-bottom py-2 offerHeader">
        <div class="col-12">
            <button class="btn btn-primary back" onclick="goBack()"><i class="fas fa-arrow-left"></i></button>
            <button class="btn btn-primary fav"><i class="fas fa-star"></i></button>
        </div>
    </div>
    <div class="row pt-3 offerMid">
            <?php while ($row = $result->fetch_assoc()) : ?>
        <div class="col-4 col-lg-2">
            <h4 id="price" class="text-center py-2 px-1"><?php echo $row['price'] . ' <span>лева</span>'?></h4>
        </div>
        <div class="col-8 col-lg-10">
            <h4 id="title" class="text-center py-2 px-1"><?php echo $row['brand'] .' '. $row['model'] .' '. $row['eddition']?></h4>
        </div>
    </div>
    <div class="row mt-5 offerBottom text-center">
        <div class="col-12 col-md-10 col-lg-6 mx-auto">
            <img class="d-flex w-100 p-3 mb-5" src="<?php echo 'images/'. $row['car_image']?>" alt="car image">
        </div>  
        <div class="col-12 col-md-10 col-lg-2">
            <h5><span><i class="fas fa-car"></i></span> &nbsp<?php echo $row['car_type']?></h5>
            <h5><span><i class="fas fa-calendar"></i></span> &nbsp<?php echo $row['car_year']?></h5>
            <h5><span><i class="fas fa-tachometer-alt"></i></span> &nbsp<?php echo $row['mileage'] . ' км'?></h5>
            <h5><span><i class='fas fa-tint'>   </i></span> &nbsp<?php echo $row['fuel']?></h5>
        </div>
        <div class="col-12 col-md-10 col-lg-4">
            <h5><span><i class='fas fa-mandolin'>   </i></span> &nbsp<?php echo $row['transmition']?></h5>
            <h5><span><i class='fas fa-tire-rugged'>   </i></span> &nbsp<?php echo $row['engine_power']. ' к.с.'?></h5>
            <h5 class="border-bottom pb-3"><span><i class='fas fa-paint-brush'>   </i></span> &nbsp<?php echo $row['colour']?></h5>
            <h5 class="mt-3 text-left description">Описание</h3>
            <p class="text-left description"><?php echo $row['car_description'];?></p>
        </div>
        </div>
    </div>
    
    <?php endwhile;
        include 'includes/footer.html';
    ?>
</div>
