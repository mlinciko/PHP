<?php
$theme = '';
$language = '';

$redis = new Redis();
$redis->connect('redis', 6379);
try {
  $db = $redis->select(1);
  if ($db) {
    $theme = $redis->get('theme');
    $language = $redis->get('language');
  }
}catch (RedisException $ex) {
  echo $ex.PHP_EOL;
}

//header('Location: /authorization/view/view-private/index.php');
?>