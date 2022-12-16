<?php
  session_start();
  if (!empty($_SESSION['id'])) {
    header('Location: /authorization/view/view-private/index.php');
    $_SESSION['alert'] = 'Введите логин и пароль';
  }
?>
<!DOCTYPE html>
<html lang="en">
<!-- для динамического обновления названия страницы -->
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

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/null-style.css">
  <link rel="stylesheet" href="css/form-style.css">
  <link rel="stylesheet" href="css/main.css">
  <title><?php echo $title; ?></title>
</head>

<body>
<div class="container">
  <?php

  $data = '';

  if (!empty($_GET['action'])) {
    $data = $_GET['action'];
  };

  switch ($data) {
    case 'reg':
      require("view/view-public/registration.php");
      break;
    default:
      require("view/view-public/form.php");
      break;
  }

  ?>
  </div>
  <!-- скрипт для проверки валидности формы регистрации -->
  <script src="js/validate-reg.js"></script>
</body>

</html>
