<?php
  session_start();
  function query($login, $password, $type)
{
  $mysqli = new mysqli("mysql", "root", "mlinciko", "starscoffee");
  // //в базе данных ищем введенные данные
  switch($type)
  {
    case 'findByLogin':
      $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$login'");
      foreach($result as $row){
        if ($row['email'])
          return true;
        else return false;
      };
      break;
    case 'findByLoginAndPassword':
      $result = $mysqli->query("SELECT * FROM `users` WHERE email='$login' AND `password`='$password'");
      foreach($result as $row){
        if ($row['email'])
          return true;
        else return false;
      };
      break;
    default:
      break;
  }

  return false;
}
function find($login){
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

  $login = $_POST['login'];
  $password = $_POST['password'];
  
  if(query($login, $password, "findByLoginAndPassword") && !empty($login) && !empty($password)){
    $_SESSION['id'] = random_int(100000, 999999);
    //ищем данные о пользователе в базе данных
    $user = find($login);
    //записываем найденные данные в глобальную переменную
    $_SESSION['login'] = $user[0];
    $_SESSION['name'] = $user[2];
    $_SESSION['tel'] = $user[3];
    $_SESSION['email'] = $user[4];
    $_SESSION['user_id'] = $user[5];
    header('Location: /authorization/view/view-private/index.php');
  }
  else{ 
    $_SESSION['alert']='Неверные данные';
    header('Location: /authorization/index.php');
  }
?>