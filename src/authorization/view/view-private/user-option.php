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