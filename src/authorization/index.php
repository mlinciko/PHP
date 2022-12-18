<?php
  require("controllers/utils/checkSession.php");
  //для динамического обновления названия страницы
  require("controllers/utils/definePageTitle.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/null-style.css">
  <link rel="stylesheet" href="assets/css/form-style.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <title><?php echo $title; ?></title>
</head>

<body style="background: url('assets/images/main.jpg') 0 0 no-repeat; background-size: cover;">
<div style="width:150px; text-align:center; position: absolute; margin: 20px 0;">
    <a style="color:#fff;" href="../index.php">На главную страницу</a>
  </div>
<div class="container">
  <?php
    require("controllers/utils/defineInitialPage.php")
  ?>
  </div>
  <!-- скрипт для проверки валидности формы регистрации -->
  <script src="assets/js/validate-reg.js"></script>
</body>

</html>
