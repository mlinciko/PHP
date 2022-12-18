<?php
$title = "Авторизация";
if (!empty($_GET['action'])) {
  switch ($_GET['action']) {
    case 'reg':
      $title = "Регистрация";
      break;
    default:
      $title = "Авторизация";
      break;
  }
}
?>