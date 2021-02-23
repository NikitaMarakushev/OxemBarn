<?php

namespace App\Independent;

//Класс Хлев
use App\Exemplars\Cow;
use App\Exemplars\Hen;
use Exception;

class Barn {

    //Данные константы определяют максимальное количество коров и кур в хлеве
    const MAX_COUNT_OF_COWS = 10;
    const MAX_COUNT_OF_HANS = 20;

    /**
     * @param $hens
     * @return Hen
     * @throws Exception
     *  * Метод реализует логику добавления кур в хлев
     */
    public function addHenToBarn($hens)
    {
        if (count($hens) < self::MAX_COUNT_OF_HANS) {
            return new Hen();
        } else {
            throw new Exception("В хлеву достаточно кур!");
        }
    }

    /**
     * @param $cows
     * @return Cow|string
     * Метод реализует логику добавления коров в хлев
     * @throws Exception
     */
    public function addCowToBarn($cows)
    {
        if (count($cows) < self::MAX_COUNT_OF_COWS) {
            return new Cow();
        } else {
            throw new Exception("В хлеву достаточно коров!");
        }
    }
}