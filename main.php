<?php

abstract  class AbstractAnimal
{
    static $identification = 1;

    abstract public function addAnimalToBarn();

    abstract public function collectAnimalProduction();

    abstract public function countCollectedProduction();

}

class Hens extends AbstractAnimal {

    private $henRegistrationId;

    public function __construct($identification)
    {
        $this->henRegistrationId = parent::$identification + 1;
    }

    public function addAnimalToBarn()
    {
        // TODO: Implement addAnimalToBarn() method.
    }

    public function collectAnimalProduction()
    {
        // TODO: Implement collectAnimalProduction() method.
    }

    public function countCollectedProduction()
    {
        // TODO: Implement countCollectedProduction() method.
    }
}

class Cow extends AbstractAnimal {

    private $cowRegistrationId;

    public function __construct($identification)
    {
        $this->cowRegistrationId = parent::$identification + 1;
    }

    public function addAnimalToBarn()
    {

    }

    public function collectAnimalProduction()
    {

    }

    public function countCollectedProduction()
    {

    }

}

