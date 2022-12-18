<div class="products-item">
    <img class="product-image" src="http://localhost:8081/assets/images/<?= htmlspecialchars($row['image'])?>" alt="">
    <div class="product-info">
        <div class="product-name"><?= htmlspecialchars($row['name'])?></div>
        <div class="product-price"><?= htmlspecialchars($row['price'])?> &#8381; </div>
    </div>
</div>