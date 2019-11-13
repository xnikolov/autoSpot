<?php include 'includes/header.html'?>
<head>
    <link rel="stylesheet" href="css/register/register.css">
</head>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-6 px-5">
            <h1 class="mt-5 mb-4 pt-2 headingResigter">Благодарим, че се отби!</h1>
            <h5 class="headingResigter">Нямаш регистрация? Регистрирай от <a href="register.php">тук</a>.</h5>
        </div>
        <div class="col-12 col-lg-4 py-5 mx-auto">
            <form action="add-car-functions.php" method="POST" enctype="multipart/form-data" class="addNewForm">
                <div class="power form-group">
                    <input type="number" class="form-control" name="power" id="power_input" placeholder="E-Mail" required>
                </div>
                <div class="mileage form-group">
                    <input type="number" class="form-control" name="mileage" id="mileage_input" placeholder="Парола" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control registerBtn mt-4" value="Вход" name="add">
                </div>
            </div>
        </form>
    </div>
</div>
