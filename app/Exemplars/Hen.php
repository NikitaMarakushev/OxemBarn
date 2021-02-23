<?php

namespace App\Exemplars;

use App\Core\AbstractAnimal;

//Класс Курицы, наследуется от асбратного класса животного
class Hen extends AbstractAnimal
{
    /**
     * @var int
     * Регистрационный номер конкретной курицы
     */
    private $henRegistrationId;

    /**
     * Hen constructor.
     * Конструктор выдает уникальный регистрационный номер конкретной курице
     */
    public function __construct()
    {
        $this->henRegistrationId = parent::$identification + 1;
    }

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