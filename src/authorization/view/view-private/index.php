<?php
session_start();
if (empty($_SESSION['id'])) {
  header('Location: /');
  $_SESSION['alert'] = 'Введите логин и пароль';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/authorization/css/null-style.css">
  <link rel="stylesheet" href="/authorization/css/account-style.css">
  <link rel="stylesheet" href="/authorization/css/form-style.css">
  <title>Личный кабинет</title>
</head>

<body>
  <?php
  $data = '';

  if (!empty($_GET['action'])) {
    $data = $_GET['action'];
  };

  require("account.php");

  ?>
  <script src="/authorization/js/script-change-data.js"></script>
</body>

</html>