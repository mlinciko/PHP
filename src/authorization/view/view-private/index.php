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
  <link rel="stylesheet" href="/authorization/assets/css/null-style.css">
  <?php
    require("../../controllers/utils/defineUserStyle.php");
  ?>
  <title>Личный кабинет</title>
</head>

<body>
  <?php
    require("user-option.php");
    require("account.php");
    require("uploaded-files.php");
  ?>
  <script src="/authorization/assets/js/change-data.js"></script>
</body>

</html>