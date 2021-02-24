<?php

use App\Core\AbstractAnimal;

//Класс Курицы, наследуется от асбратного класса животного
class Hen extends AbstractAnimal
{
    /**
     * @return int
     * Сбор яиц, согласно условию, за одну кладку
     * может быть произведено не более одного яйца
     */
    public function collectAnimalProduction(): int
    {
        return $producedEggs = rand(0, 1);
    }
}