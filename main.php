<?php

abstract  class AbstractAnimal
{
    static $identification = 1;

    abstract public function collectAnimalProduction();

    abstract public function countCollectedProduction();

}

class Hens extends AbstractAnimal {

    private $henRegistrationId;

    private $producedEggs;

    public function __construct($identification)
    {
        $this->henRegistrationId = parent::$identification + 1;
    }

    public function collectAnimalProduction()
    {
        // TODO: Implement collectAnimalProduction() method.
    }

    public function countCollectedProduction(): int
    {
        $producedEggs = rand(0, 1);
        return $producedEggs;
    }
}

class Cow extends AbstractAnimal {

    private $cowRegistrationId;

    public $producedMilk;

    public function __construct($identification)
    {
        $this->cowRegistrationId = parent::$identification + 1;
    }

    public function collectAnimalProduction()
    {

    }

    public function countCollectedProduction(): int
    {
        $producedMilk = rand(8, 12);
        return $producedMilk;
    }

}

class Collector {

    const MAX_COUNT_OF_COWS = 10;
    const MAX_COUNT_OF_HANS = 20;


    public function addAnimalToBarn($animal)
    {
        //Если в хлеву нет коровы ил курицы с таким номером - дабавить, есть - кинуть эксцепшн
    }
}