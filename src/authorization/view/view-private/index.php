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
  <?php 
    if (!empty($_SESSION['theme']) && $_SESSION['theme']=='white') {
      echo '<link rel="stylesheet" href="/authorization/css/account-style-white.css">';
      echo '<link rel="stylesheet" href="/authorization/css/form-style-white.css">';
  }?>
  <?php 
    if (!empty($_SESSION['theme']) && $_SESSION['theme']=='black') {
      echo '<link rel="stylesheet" href="/authorization/css/account-style-black.css">';
      echo '<link rel="stylesheet" href="/authorization/css/form-style-black.css">';
  }?>
  <?php 
    if (empty($_SESSION['theme'])) {
      echo '<link rel="stylesheet" href="/authorization/css/account-style-white.css">';
      echo '<link rel="stylesheet" href="/authorization/css/form-style-white.css">';
  }?>
  <title>Личный кабинет</title>
</head>

<body>
<div class="user-options">
    <div class="content__container">
      <div class="theme">
        <form class="user-content-form" action="/authorization/controllers/user-content/setUserContent.php" method="post">
          <div class="user-content__title">Пользовательские настройки</div>
          <select name="theme" id="theme">
            <option value="white" <?php 
              if (!empty($_SESSION['theme']) && $_SESSION['theme']=='white') {
                echo 'selected';
              }?>>Светлая</option>
            <option value="black" <?php 
              if (!empty($_SESSION['theme']) && $_SESSION['theme']=='black') {
                echo 'selected';
              }?>>Темная</option>
          </select>
          <select name="language" id="language">
            <option value="rus" <?php 
              if (!empty($_SESSION['language']) && $_SESSION['language']=='rus') {
                echo 'selected';
              }?>>Русский</option>
            <option value="eng" <?php 
              if (!empty($_SESSION['language']) && $_SESSION['language']=='eng') {
                echo 'selected';
              }?>>English</option>
          </select>
          <button type="submit">Установить</button>
        </form>
      </div>
    </div>
    <div class="file__container">
      <form enctype="multipart/form-data" action="/authorization/controllers/user-content/uploadFile.php" method="post">
          <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
          Загрузить файл: <input name="userfile" type="file" />
          <button type="submit">Загрузить файл</button>
      </form>
    </div>
  </div>
  <?php
  $data = '';

  if (!empty($_GET['action'])) {
    $data = $_GET['action'];
  };

  require("account.php");

  ?>
  <div class="uploaded-files-container">
    <div class="uploaded-files-title">Загруженные файлы</div>
    <?php
        $files = scandir('/var/www/html/authorization/assets/uploaded-files/', SCANDIR_SORT_DESCENDING);
        if (count($files) == 0) {
            echo "Нет загруженных файлов";
        } else {
            foreach ($files as $file) {
              echo "<div><a href='/authorization/assets/uploaded-files/" . $file . "'>" . $file . "</a></div>";
            }
        }
    ?>
  </div>
  <script src="/authorization/js/change-data.js"></script>
</body>

</html>