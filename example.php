<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();
$faker->addProvider(new Tidor\FakerChilean\Provider\Run($faker));
$faker->addProvider(new Tidor\FakerChilean\Provider\Category($faker));
$faker->addProvider(new Tidor\FakerChilean\Provider\Product($faker));

echo $faker->run . PHP_EOL;
echo $faker->unique()->rut . PHP_EOL;

echo $faker->category . PHP_EOL;
echo $faker->unique()->category . PHP_EOL;


echo $faker->productName . PHP_EOL;
echo $faker->unique()->productName . PHP_EOL;
