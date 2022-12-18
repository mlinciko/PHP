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