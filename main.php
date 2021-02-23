<?php

abstract  class AbstractAnimal
{
    public $registrationId;

    abstract public function addAnimalToBarn();

    abstract public function  collectAnimalProduction();

    abstract public function countCollectedProduction();

}

class Hans extends AbstractAnimal {

    public function __construct()
    {
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

class Cow extends AbstractAnimal {

    public function __construct()
    {
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