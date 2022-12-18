<div class="container">
    <div class="title">Продукция</div>
    <div class="products-container">
        <?php
            require("controllers/prepareProducts.php");
        ?>
        <?php foreach ($result as $row) : ?>
            <?php require("view/products.php"); ?>
        <?php endforeach ?>
    </div>
</div>