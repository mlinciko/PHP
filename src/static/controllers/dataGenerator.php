<?php
require_once '/var/www/html/vendor/autoload.php';
$faker = Faker\Factory::create();

$fakeIndicatorData = array();
$fakeCountryData = array();
for($i = 0; $i < 50; ++$i) {
    $fakeIndicatorData[$i] = $faker->randomDigitNotNull();
    $fakeCountryData[$i] = $faker->country();
}
?>