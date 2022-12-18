<?php
  session_start();
  if (!empty($_SESSION['id'])) {
    header('Location: /authorization/view/view-private/index.php');
    $_SESSION['alert'] = 'Введите логин и пароль';
  }
?>