<?php
function findByLogin($login) {
    $mysqli = new mysqli("mysql", "root", "mlinciko", "starscoffee");
    return $mysqli->query("SELECT * FROM `users` WHERE `email`='$login'");
}
?>