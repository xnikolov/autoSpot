<?php include 'includes/header.html'?>
<?php require_once 'add-car-functions.php'?>

<div class="container">
    <div class="heading-container">
        <h1>Добавяне на обява</h1>
    </div>
    <form action="add-car-functions.php" method="POST" enctype="multipart/form-data" class="addNewForm">
        <aside class="addNewLeft">
            <div class="make input-container">
                <input type="text" name="make" id="car_make" placeholder="Марка" required>
            </div>
            <div class="model input-container">
                <input type="text" name="model" id="car_model" placeholder="Модел" required>
            </div>
            <div class="eddition input-container">
                <input type="text" name="eddition" id="model_eddition" placeholder="Модификация (1.6, 1.9TDI...)" required>
            </div>
            <div class="power input-container">
                <input type="number" name="power" id="power_input" placeholder="Мощност" required>
            </div>
            <div class="type input-container">
                <select type="text" name="car_type" id="type-input" required>
                    <option value="default">Купе</option>
                    <option value="Седан">Седан</option>
                    <option value="Хечбек">Хечбек</option>
                    <option value="Комби">Комби</option>
                    <option value="Ван">Ван</option>
                    <option value="Купе">Купе</option>
                    <option value="Кабрио">Кабрио</option>
                </select>
            </div>
            <div class="year input-container">
                <input type="number" name="year" id="carYear" placeholder="Година" required>
            </div>
            <div class="transmition input-container">
                <select type="text" name="transmition" id="transmition-input" required>
                    <option value="default">Трансмисия</option>
                    <option value="Ръчна">Ръчна</option>
                    <option value="Автоматична">Автоматична</option>
                    <option value="Полуавтоматчна">Полуавтоматчна</option>
                </select>
            </div>
            <div class="wheel input-container">
                <select type="text" name="wheel" id="wheel-input" required>
                    <option value="default">Волан</option>
                    <option value="Ляв">Ляв</option>
                    <option value="Десен">Десен</option>
                </select>
            </div>
            <div class="color input-container">
                <input type="text" name="color" id="carColor" placeholder="Цвят" required>
            </div>
            <div class="fuel input-container" >
                <select type="text" name="fuel" id="fuel-input" required>
                    <option value="default">Тип на гориво</option>
                    <option value="Бензин">Бензин</option>
                    <option value="Дизел">Дизел</option>
                    <option value="Бензин + Газ">Бензин + Газ</option>
                    <option value="Електрически">Електрически</option>
                    <option value="Хибрид">Хибрид</option>
                </select>
            </div>
            
            
            <div class="mileage input-container">
                <input type="number" name="mileage" id="mileage_input" placeholder="Пробег" required>
            </div>
        </aside>

        <section class="add-new">
           <div class="description">
                <h2>Описание</h2>
                <textarea type="text" name="description" cols="60" rows="5" id="car_description" placeholder="Опишете накратко автомобила си, за да улесните купувачите"></textarea>
            </div>
            <div class="image">
                <label for="image_upload">Снимка</label>
                <input type="file" name="image" id="image_upload" value="Снимка" required>
            </div>
            <div class="city">
                <input type="text" name="city" id="city_input" placeholder="Населено място" required>
            </div>
            <div class="phone">
            <input type="phone" name="phone" id="phone_input" placeholder="Телефон" required>
           
                <select name="country" id="country_code" onselect="validatePhone();">
                    <option value="+359">+359</option>
                    <option value="+383">+383</option>
                    <option value="+381">+381</option>
                    <option value="+40">+40</option>
                </select>
             </div>
            
            <div class="price">
                <input type="text" name="price" id="price_input" placeholder="Цена" required>
            </div>
            
            <div class="submit">
                <input type="submit" value="Публикувай" name="add">
            </div>
        </section>
    </form>
</div>

<?php include 'includes/footer.html'?>