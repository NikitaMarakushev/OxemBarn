<?php

use App\Core\AbstractAnimal;

//Класс Коровы, наследуется от асбратного класса животного
class Cow extends AbstractAnimal
{
    /**
     * Регистрационный номер конкретной коровы
     * @var int
     */
    private $cowRegistrationId;


    /**
     * Cow constructor.
     *  Конструктор выдает уникальный регистрационный номер конкретной корове
     */
    public function __construct()
    {
        $this->cowRegistrationId = parent::$identification + 1;
    }

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