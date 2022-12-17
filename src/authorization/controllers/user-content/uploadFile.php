<?php
$uploaddir = '/var/www/html/authorization/assets/uploaded-files/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    header('Location: /authorization/view/view-private/index.php');
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
    echo 'Некоторая отладочная информация:';    
    print_r($_FILES);
}
?>