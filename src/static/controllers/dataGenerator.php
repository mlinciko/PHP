<?php
require_once '/var/www/html/vendor/autoload.php';
$faker = Faker\Factory::create();

$fakeIndicatorData = array();
$fakeCountryData = array();
$fakeNameData = array();
$fakeAgeData = array();
$fakeColorData = array();
for($i = 0; $i < 50; ++$i) {
    $fakeIndicatorData[$i] = $faker->randomDigitNotNull();
    $fakeCountryData[$i] = $faker->country();
    $fakeNameData[$i] = $faker->name();
    $fakeAgeData[$i] = $faker->numberBetween(0, 100);
    $fakeColorData[$i] = $faker->colorName();
}
?>