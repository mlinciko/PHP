<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarsCoffe</title>
    <link rel="stylesheet" href="assets/css/null-style.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <div class="header-container">
        <div class="menu">
            <div class="menu-item">
                <a href="./index.php">Главная</a>
            </div>
            <div class="menu-item">
                <a href="http://localhost:8081/about/about.html">О нас</a>
            </div>
            <div class="menu-item">
                <a href="./admin/admin.php">Админка</a>
            </div>
            <div class="menu-item">
                <a href="./static/index.php">Статистика</a>
            </div>
        </div>
    </div>
    
    <?php
        require("main/index.php");
    ?>
</body>
</html>