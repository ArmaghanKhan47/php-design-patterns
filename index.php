<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Singleton\Singleton;
use App\AbstractFactory\FactoryOne\FactoryOne;
use App\AbstractFactory\FactoryTwo\FactoryTwo;

$singleton_instance = Singleton::getInstance();
print($singleton_instance->getType() . '\n');

$factory_one = new FactoryOne();
$factory_one_product_one = $factory_one->makeProductOne();
$factory_one_product_two = $factory_one->makeProductTwo();
print($factory_one_product_one->getName());
print($factory_one_product_two->getType());

$factory_two = new FactoryTwo();
$factory_two_product_one = $factory_two->makeProductOne();
$factory_two_product_two = $factory_two->makeProductTwo();
print($factory_two_product_one->getName());
print($factory_two_product_two->getType());


