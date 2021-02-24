<?php

use App\Core\AbstractAnimal;

//Класс Коровы, наследуется от асбратного класса животного
class Cow extends AbstractAnimal
{
    /**
     * @return int
     * Сбор молока, согласно условию, за один надой
     * может быть произведено не более двенадцати яйца
     */
    public function collectAnimalProduction(): int
    {
        return $producedMilk = rand(8, 12);
    }
}