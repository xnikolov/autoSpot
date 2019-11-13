<?php include 'includes/header.html'?>
<head>
    <link rel="stylesheet" href="css/register/register.css">
</head>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-6 py-5 px-5">
            <h1 class="mt-5 mb-4 pt-2 headingResigter">Добре дошъл при нас! </h1>
            <h5 class="headingResigter">Вече имаш регистрация? Влез от <a href="login.php">тук</a>.</h5>
        </div>
        <div class="col-12 col-lg-4 py-3 mx-auto">
            <form action="add-car-functions.php" method="POST" enctype="multipart/form-data" class="addNewForm">
                <div class="make form-group">
                    <input type="text" class="form-control" name="make" id="car_make" placeholder="E-Mail" required>
                </div>
                <div class="power form-group">
                    <input type="number" class="form-control" name="power" id="power_input" placeholder="Парола" required>
                </div>
                <div class="mileage form-group">
                    <input type="number" class="form-control" name="mileage" id="mileage_input" placeholder="Повтори паролата" required>
                </div>
                <div class="model form-group">
                    <input type="text" class="form-control" name="model" id="car_model" placeholder="Име" required>
                </div>
                <div class="eddition form-group">
                    <input type="text" class="form-control" name="eddition" id="model_eddition" placeholder="Фамилия" required>
                </div>
                <div class="power form-group">
                    <input type="number" class="form-control" name="power" id="power_input" placeholder="Телефон" required>
                </div>
                <div class="mileage form-group">
                    <input type="number" class="form-control" name="mileage" id="mileage_input" placeholder="Град" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control registerBtn mt-4" value="Регистрация" name="add">
                </div>
            </form>
        </div>
    </div>
</div>