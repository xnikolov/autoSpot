<?php include 'includes/header.html'?>
<?php require_once 'add-car-functions.php'?>

<div class="container-fluid addNewContainer">
    <div class="row ">
        

    </div>
    <div class="row addFormRow mt-3">
        
    <?php 
            include 'edit-car.php';

            if($update == true){
                echo "<h1 class='mt-4 mb-4 py-2 px-2 mx-auto headingAddOffer'>Редактране на обява</h1>";
            }

            else{
                echo "<h2 class='mt-4 mb-4 py-2 px-2 mx-auto headingAddOffer'>Добавяне на обява</h2>";
            }
            
        ?>
       <form action="add-car-functions.php" method="POST" enctype="multipart/form-data" class="addNewForm">
            <div class="col-12 col-lg-4 left py-4">
                <div class="make form-group">
                    <input type="text" class="form-control" name="make" id="car_make" placeholder="Марка" required>
                </div>
                <div class="model form-group">
                    <input type="text" class="form-control" name="model" id="car_model" placeholder="Модел" required>
                </div>
                <div class="eddition form-group">
                    <input type="text" class="form-control" name="eddition" id="model_eddition" placeholder="Модификация (1.6, 1.9TDI...)" required>
                </div>
                <div class="power form-group">
                    <input type="number" class="form-control" name="power" id="power_input" placeholder="Мощност" required>
                </div>
                <div class="type form-group">
                    <select type="text" class="form-control" name="car_type" id="type-input" required>
                        <option value="default">Купе</option>
                        <option value="Седан">Седан</option>
                        <option value="Хечбек">Хечбек</option>
                        <option value="Комби">Комби</option>
                        <option value="Ван">Ван</option>
                        <option value="Купе">Купе</option>
                        <option value="Кабрио">Кабрио</option>
                    </select>
                </div>
                <div class="year form-group">
                    <input type="number" class="form-control" name="year" id="carYear" placeholder="Година" required>
                </div>
                <div class="transmition form-group">
                    <select type="text" class="form-control" name="transmition" id="transmition-input" required>
                        <option value="default">Трансмисия</option>
                        <option value="Ръчна">Ръчна</option>
                        <option value="Автоматична">Автоматична</option>
                        <option value="Полуавтоматчна">Полуавтоматчна</option>
                    </select>
                </div>
                <div class="wheel form-group">
                    <select type="text" class="form-control" name="wheel" id="wheel-input" required>
                        <option value="default">Волан</option>
                        <option value="Ляв">Ляв</option>
                        <option value="Десен">Десен</option>
                    </select>
                </div>
                <div class="color form-group">
                    <input type="text" class="form-control" name="color" id="carColor" placeholder="Цвят" required>
                </div>
                <div class="fuel form-group" >
                    <select type="text" class="form-control" name="fuel" id="fuel-input" required>
                        <option value="default">Тип на гориво</option>
                        <option value="Бензин">Бензин</option>
                        <option value="Дизел">Дизел</option>
                        <option value="Бензин + Газ">Бензин + Газ</option>
                        <option value="Електрически">Електрически</option>
                        <option value="Хибрид">Хибрид</option>
                    </select>
                </div>
                <div class="mileage form-group">
                    <input type="number" class="form-control" name="mileage" id="mileage_input" placeholder="Пробег" required>
                </div>
            </div>
            <div class="col-12 col-lg-8 right mt-5">
                <div class="form-group">
                    <h2 class="mb-5">Допълнителна информация</h2>
                    <textarea type="text" class="form-control" name="description" cols="60" rows="5" id="car_description" placeholder="Опишете накратко автомобила си, за да улесните купувачите"></textarea>
                </div>
                <div class="form-group">
                    <label for="image_upload">Снимка</label>
                    <input type="file" class="form-control" name="image" id="image_upload" value="Снимка" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="city" id="city_input" placeholder="Населено място" required>
                </div>
                <div class="form-group">
                    <input type="phone" class="form-control" name="phone" id="phone_input" placeholder="Телефон" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="price" id="price_input" placeholder="Цена" required>
                </div>
        
                <div class="form-group">
                    <input type="submit" class="form-control submitBtn mt-4" value="Публикувай" name="add">
                </div>
            </div>
        </form>
    </div>
</div>

<?php include 'includes/footer.html'?>