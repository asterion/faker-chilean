<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();
$faker->addProvider(new Tidor\FakerChilean\Provider\Run($faker));
$faker->addProvider(new Tidor\FakerChilean\Provider\Category($faker));

echo $faker->run . PHP_EOL;
echo $faker->unique()->rut . PHP_EOL;

echo $faker->category . PHP_EOL;
echo $faker->unique()->category . PHP_EOL;
