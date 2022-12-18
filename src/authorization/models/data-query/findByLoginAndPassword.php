<?php
function findByLoginAndPassword($login, $password) {
    $mysqli = new mysqli("mysql", "root", "mlinciko", "starscoffee");
    return $mysqli->query("SELECT * FROM `users` WHERE email='$login' AND `password`='$password'");
}
?>