<?php
function findProducts() {
    $mysqli = new mysqli("mysql", "root", "mlinciko", "starscoffee");
    return $mysqli->query("SELECT * FROM products");
}
?>