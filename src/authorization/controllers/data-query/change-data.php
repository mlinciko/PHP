
<?php
  session_start();

  $login = $_SESSION['login'];
  $name = $_POST['name'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  $userId = $_SESSION['user_id'];

  $mysqli = new mysqli("mysql", "root", "mlinciko", "starscoffee");
  $mysqli->query("UPDATE `users` SET `email`='$email', `name`='$name', `tel`='$tel' WHERE `user_id`='$userId'");
  
  //обновляем значения сессии
  $_SESSION['name'] = $name;
  $_SESSION['tel'] = $tel;
  $_SESSION['email'] = $email;
  header('Location: /authorization/view/view-private/index.php');
?>