<?php 
if (!empty($_SESSION['theme']) && $_SESSION['theme']=='white') {
    echo '<link rel="stylesheet" href="/authorization/assets/css/account-style-white.css">';
    echo '<link rel="stylesheet" href="/authorization/assets/css/form-style-white.css">';
}?>
<?php 
if (!empty($_SESSION['theme']) && $_SESSION['theme']=='black') {
    echo '<link rel="stylesheet" href="/authorization/assets/css/account-style-black.css">';
    echo '<link rel="stylesheet" href="/authorization/assets/css/form-style-black.css">';
}?>
<?php 
if (empty($_SESSION['theme'])) {
    echo '<link rel="stylesheet" href="/authorization/assets/css/account-style-white.css">';
    echo '<link rel="stylesheet" href="/authorization/assets/css/form-style-white.css">';
}?>