<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();
$faker->addProvider(new Tidor\FakerChilean\Provider\Run($faker));

echo $faker->run . PHP_EOL;
echo $faker->rut . PHP_EOL;
