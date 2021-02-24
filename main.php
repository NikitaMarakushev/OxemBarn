<?php

//Подключение пользовательского автозагрузчика
require './app/client_autoload.php';
use App\Independent\Barn;

//Инстанцирование экземпляра класса Хлева
$barn = new Barn();

$chicken = new Hen();

$cow = new Cow();

$chicken->collectAnimalProduction();

$cow->collectAnimalProduction();


$barn->setCountOfAnimal(10);

$barn->addAnimalToBarn($chicken);

$barn->addAnimalToBarn($cow);


echo "Сбор завершен успешно!".PHP_EOL;


print("Количество яиц: ".$barn->collectProduction($chicken).PHP_EOL);
print("Количество молока: ".$barn->collectProduction($cow).PHP_EOL);

