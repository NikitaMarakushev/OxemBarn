<?php

require 'vendor/autoload.php';
//Инстанцирование экземпляра класса Хлева
use App\Independent\Barn;

$barn = new Barn();

//Хранилище кур и коров
$barn_storage = array();

$hens = [];
$cows = [];

//Цикл регистрации коров
for($i=1;$i<=Barn::MAX_COUNT_OF_COWS;$i++){
    try {
        $barn_storage[] = $barn->addCowToBarn($cows);
    } catch (Exception $e) {
        echo 'Исключение, невозможно зарегистрировать корову: ',  $e->getMessage(), "\n";
    }
}

//Цикл регистрации кур
for($i=1;$i<=Barn::MAX_COUNT_OF_HANS;$i++){
    try {
        $barn_storage[] = $barn->addHenToBarn($hens);
    } catch (Exception $e) {
        echo 'Исключение, невозможно зарегистрировать курицу: ',  $e->getMessage(), "\n";
    }
}

//Инициализация коризины
$milk = 0;
$eggs = 0;

//Код ниже отвечает за сбор продукции
foreach ($barn_storage as $exemplar){

    if (get_class($exemplar) == 'Cow') {
        $milk += $exemplar->collectAnimalProduction();
    } else {
        if (get_class($exemplar) == 'Hen') {
            $eggs += $exemplar->collectAnimalProduction();
        } else {
            throw new Exception("Такой продукции не существует!");
        }
    }
}

echo "Сбор завершен успешно!".PHP_EOL;

//Вывод конечного количества продукции
print("Количство молока: ".$milk.PHP_EOL);
print("Количство яиц: ".$eggs.PHP_EOL);