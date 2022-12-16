<?php
function query($login, $password, $type)
{
  $mysqli = new mysqli("mysql", "root", "mlinciko", "starscoffee");
  // //в базе данных ищем введенные данные
  switch($type)
  {
    case 'findByLogin':
      $result = $mysqli->query("SELECT * FROM users WHERE EMAIL = $login");
      if ($result)
        return true;
      break;
    case 'findByLoginAndPassword':
      $result = $mysqli->query("SELECT * FROM users WHERE EMAIL = $login AND PASSWORD = $password");
      if ($result)
        return true;
      break;
    default:
      break;
  }

  return false;
}
function find($login){
  $mysqli = new mysqli("mysql", "root", "mlinciko", "starscoffee");
  $user = [];
  
  $result = $mysqli->query("SELECT * FROM users WHERE EMAIL = $login");
  $user[0] = $result['login'];//login
  $user[1] = $result['password'];//password
  $user[2] = $result['name'];//name
  $user[3] = $result['tel'];//telephone
  $user[4] = $result['email'];//email

  return $user;
}
?>