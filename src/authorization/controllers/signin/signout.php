<?php
  session_start();
  session_unset();
  header('Location: /authorization/index.php');
?>