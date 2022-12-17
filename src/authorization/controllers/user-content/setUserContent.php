<?php
session_start();
$theme = $_POST['theme'];
$language = $_POST['language'];

$_SESSION['theme'] = $theme;
$_SESSION['language'] = $language;

$redis = new Redis();
$redis->connect('redis', 6379);
try {
  $db = $redis->select(1);
  if ($db) {
    $redis->set('theme', $theme);
    $redis->set('language', $language);
  }
}catch (RedisException $ex) {
  echo $ex.PHP_EOL;
}

header('Location: /authorization/view/view-private/index.php');
?>