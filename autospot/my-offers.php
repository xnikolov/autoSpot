<head>
<link rel="stylesheet" href="css/showCar/show-car.css">
</head>
<?php 

            require_once 'delete.php';
            include 'includes/header.html';
            $mysqli = new mysqli('localhost', 'root', '', 'autospot_db');
            $mysqli->set_charset("utf8");
                
            $result = $mysqli->query("SELECT * FROM cars ") or die($mysqli->error);
        // pre_r($result);
    ?>

<div class="container">
    <div class="row my-3 mx-2 title">
        <h2 class="mx-auto">Моите обяви</h2>
    </div>
    <div class="row">
        <div class="card mx-auto" style="width: 18rem;">
        <?php while ($row = $result->fetch_assoc()) :?>
            <img class="mx-auto mt-5" src="<?php echo 'images/'.$row['car_image']?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title"><?php echo $row['brand'].' '.$row['model'].' '.'<span>'.$row['eddition'].'</span>'?></h5>
                <a href="my-offers.php?edit=<?php echo $row['id']?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                <a href="offer.php?offer_id=<?php echo $row['id']?>" class="btn btn-success"><i class="fas fa-search-plus"></i></a>
                <a href="my-offers.php?delete=<?php echo $row['id']?>" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>
            </div>
            <hr>
            <?php endwhile;?>

        </div>
        
<?php if($result == false){
    echo "<h4>Няма никой тук все още...</h4>";
    echo "<p>Добави първата си обява от <span style='background:#fc9a03;color:#fff;border-radius:10px;' class='px-1 py-1'>оранжевия</span> бутон горе <i class='fas fa-level-up-alt'></i></p>"; 
}?>
    </div>
 </div>

