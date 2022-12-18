<?php
function findUser($login){
    $mysqli = new mysqli("mysql", "root", "mlinciko", "starscoffee");
    $user = [];
    
    $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$login'");
    foreach($result as $row) {
      $user[0] = $row['email'];//login
      $user[1] = $row['password'];//password
      $user[2] = $row['name'];//name
      $user[3] = $row['tel'];//telephone
      $user[4] = $row['email'];//email
      $user[5] = $row['user_id'];//user_id
  
      return $user;
    }
    return "";
    
  }
?>