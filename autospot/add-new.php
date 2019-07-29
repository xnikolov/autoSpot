<?php include 'includes/header.html'?>
<?php require_once 'add-car-functions.php'?>

<div class="container">
    <div class="heading-container">
        <h1>Добавяне на нова обява</h1>
    </div>
    <form action="add-car-functions.php" method="POST" enctype="multipart/form-data">
        <aside>
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
            <div class="features">
                <h2>Екстри</h2>
                <label for=""><input type="checkbox" name="ac" id="airCond">Климатик</label>
                <label for=""><input type="checkbox" name="leather" id="leather_seats">Кожен салон</label>
                <label for=""><input type="checkbox" name="e-mirrors" id="e_mirrors">Ел. огледела</label>
                <label for=""><input type="checkbox" name="e-seats" id="e_seats">Ел. седалки</label>
                <label for=""><input type="checkbox" name="stereo" id="stereo_player">Стерео</label>
                <label for=""><input type="checkbox" name="rims" id="alloy_rims">Лети джанти</label>
            </div>
            <div class="security">
                <h2>Сигурност</h2>
                <label for=""><input type="checkbox" name="airbag" id="air_bag">Airbag</label>
                <label for=""><input type="checkbox" name="abs" id="abs_brakes">ABS</label>
                <label for=""><input type="checkbox" name="esp" id="esp_control">ЕSP</label>
                <label for=""><input type="checkbox" name="parkAssist" id="park_assist">Парктроник</label>
                <label for=""><input type="checkbox" name="immobilizer" id="immobi">Имобилайзер</label>
            </div>
            <div class="description">
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
                <select name="country" id="country_code" onselect="validatePhone();">
                    <option value="+359">+359</option>
                    <option value="+383">+383</option>
                    <option value="+381">+381</option>
                    <option value="+40">+40</option>
                </select>
                <input type="phone" name="phone" id="phone_input" placeholder="Телефон" required>
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