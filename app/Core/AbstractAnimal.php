<?php

namespace App\Core;

// Базовый, асбрактный класс животного, он содержит общие поля как для курицы так и для коровы
abstract class AbstractAnimal
{
    /**
     * @var int
     * Хранит уникальный регистрационный номер животного
     * Проинициализированн нулем для последовательной выдачи номеров
     * Для удобства отдельно для кур, отдельно для коров ведется свой учет
     */
    static $identification = 1;

    /**
     * @var int
     * Регистрационный номер конкретного животного
     */
    private $animalRegistrationId;


    /**
     * AbstractAnimal constructor.
     * Выдает уникальный регистрационный номер для конкретного животного
     */
    public function __construct()
    {
        $this->animalRegistrationId = self::$identification + 1;
    }

    /**
     * @return mixed
     * Определяет сигнатуру метода для сбора продукции
     */
    abstract public function collectAnimalProduction();
}
