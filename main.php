<?php

abstract  class AbstractAnimal
{
    static $identification = 1;

    abstract public function collectAnimalProduction();

}

class Hen extends AbstractAnimal {

    private $henRegistrationId;

    public function __construct()
    {
        $this->henRegistrationId = parent::$identification + 1;
    }

    public function collectAnimalProduction(): int
    {
        return $producedEggs = rand(0, 1);
    }

}

class Cow extends AbstractAnimal {

    private $cowRegistrationId;


    public function __construct()
    {
        $this->cowRegistrationId = parent::$identification + 1;
    }

    public function collectAnimalProduction(): int
    {
        return $producedMilk = rand(8, 12);
    }

}

class Barn {

    const MAX_COUNT_OF_COWS = 10;
    const MAX_COUNT_OF_HANS = 20;

    public function addHenToBarn($hens)
    {
        if (count($hens) < self::MAX_COUNT_OF_HANS) {
            return new Hen();
        }
    }

    public function addCowToBarn($cows)
    {
        if (count($cows) < self::MAX_COUNT_OF_COWS) {
            return new Cow();
        }
    }

}

$factory=new Barn();

$barn = array();

$hens = [];
$cows = [];

for($i=1;$i<=10;$i++){
    $barn[]=$factory->addCowToBarn($cows);
}

for($i=1;$i<=20;$i++){
    $barn[]=$factory->addHenToBarn($hens);
}

$milk=0;
$egg=0;

foreach ($barn as $value){
    switch (get_class($value)) {
        case "Cow":
            $milk +=$value->collectAnimalProduction();
            break;
        case "Hen":
            $egg +=$value->collectAnimalProduction();
            break;
    }
}
echo "Milk-".$milk."\n";
echo "Egg-".$egg."\n";