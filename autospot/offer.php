<?php
    $mysql =  new mysqli ('localhost', 'root', '', 'autospot_db') or die (mysqli_error($mysql));
    $mysql->set_charset('utf8');

    $result = $mysql->query("SELECT * FROM cars WHERE id=".$_REQUEST['offer_id']);
?>


<?php
    include 'includes/header.html';
?>

<section class="offer">
    <script>
        function goBack(){
            window.history.back();
        }
    </script>
    <header>
        <span><button onclick="goBack()" id="backBtn">Назад</button></span>
        <span id="favBtn"><button><i class="fa fa-bookmark"></i>Добави в любими </i></button></span>
        
    </header>
<?php while ($row = $result->fetch_assoc()) : ?>
    <div class="car_title">
        <div class="left">
            <div class="title">
                <h1><?php echo $row['brand'] .' '. $row['model'] .' '. $row['eddition']?></h1>
            </div>
        </div>
        <div class="right">
            <div class="price">
                <h1><?php echo $row['price'] . ' <span>лева</span>'?></h1>
            </div>
        </div>
        
    </div>
    
    <div class="image">
        <img src="images/<?php echo $row['car_image']?>" alt="">
    </div>


    <div class="description">
         <h2>Описание</h2>
        <div class="content">
            <p><?php echo $row['car_description'];?></p>
        </div>
    </div>


    <div class="specs">
        <h1>Особености</h1>
    </div>
    <div class="car-info">
         <div class="left">
            <div class="property-name">
                <p>Тип купе </p>
            </div>
            <hr>
            <div class="property-name">
                <p>Година </p>
            </div>
            <hr>
            <div class="property-name">
                <p>Пробег </p>
            </div>
            <hr>
            <div class="property-name">
                <p>Гориво </p>
            </div>
            <hr>
            <div class="property-name">
                <p>Скоростна кутия </p>
            </div>
            <hr>
            <div class="property-name">
                <p>Мощност </p>
            </div>
            <hr>
             <div class="property-name">
                <p>Цвят </p>
            </div>
            <hr>
        </div>
        
        <div class="right">
             <div class="property-value">
                <p><?php echo $row['car_type']?></p>
            </div>
            <hr>
            <div class="property-value">
                <p><?php echo $row['car_year'] . 'г'?></p>
            </div>
            <hr>
            <div class="property-value">
                <p><?php echo $row['mileage'] . ' км'?></p>
            </div>
            <hr>
            <div class="property-value">
                <p><?php echo $row['fuel']?></p>
            </div>
            <hr>
            <div class="property-value">
                <p><?php echo $row['transmition']?></p>
            </div>
            <hr>
            <div class="property-value">
                <p><?php echo $row['engine_power']. ' к.с.'?></p>
            </div>
            <hr>
            <div class="property-value">
                <p><?php echo $row['colour']?></p>
            </div>
            <hr>
          </div>
        
        
    </div>
    <div class="contacts">
        <div class="phone info">
            <p><span>Телефон:</span><span id="show_phone"></span><?php echo $row['phone']?></p>
        </div>
        <div class="city info">
            <p><span id="city">Град:</span> <?php echo $row['city']?></p>
        </div>
    </div>
    
    
    
       

<?php endwhile;
    include 'includes/footer.html';
?>
</section>