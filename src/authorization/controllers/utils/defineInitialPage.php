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