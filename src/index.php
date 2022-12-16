<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarsCoffe</title>
    <link rel="stylesheet" href="/css/null-style.css">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    <div class="header-container">
        <div class="menu">
            <div class="menu-item">
                <a href="./index.php">Главная</a>
            </div>
            <div class="menu-item">
                <a href="http://localhost:8081/about.html">О нас</a>
            </div>
            <div class="menu-item">
                <a href="./admin.php">Админка</a>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="title">Продукция</div>
        <div class="products-container">
            <?php
                $mysqli = new mysqli("mysql", "root", "mlinciko", "starscoffee");
                $result = $mysqli->query("SELECT * FROM products");
            ?>
            <?php foreach ($result as $row) : ?>
            <div class="products-item">
                <img class="product-image" src="http://localhost:8081/images/<?= htmlspecialchars($row['image'])?>" alt="">
                <div class="product-info">
                    <div class="product-name"><?= htmlspecialchars($row['name'])?></div>
                    <div class="product-price"><?= htmlspecialchars($row['price'])?> &#8381; </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>