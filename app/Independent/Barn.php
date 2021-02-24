<?php

namespace App\Independent;

//Класс Хлев
use App\Core\AbstractAnimal;
use Exception;

class Barn
{
    /**
     * @var
     */
    private $countOfAnimalType;

    /**
     * @var array
     */
    private $animalStorage = [];

    /**
     * @var array
     */
    private $productionStorage = [];

    /**
     * @var array
     */
    private $registeredAnimals = [];

    /**
     * @param $animal
     * @return int
     * @throws Exception
     */
    public function addAnimalToBarn($animal)
    {
        if ((count($this->animalStorage) < $this->countOfAnimalType) && (gettype($animal) == "object")) {
            return array_push($this->animalStorage, $animal);
        } else {
            throw new Exception('В хлеву достаточно животных данного типа');
        }
    }

    /**
     * @param $animal
     * @return void
     */
    public function registerAnimal($animal) {
        for($i=1;$i<=$this->countOfAnimalType;$i++) {
            try {
                $this->registeredAnimals[] = $this->addAnimalToBarn($animal);
            } catch (Exception $e) {
                echo 'Исключение, невозможно зарегистрировать животное данного типа: ', $e->getMessage(), "\n";
            }
        }
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setCountOfAnimal($value)
    {
        return $this->countOfAnimalType = $value;
    }

    public function collectProduction($animal)
    {
        foreach ($this->productionStorage as $exemplar) {
            if ((gettype($animal) == "object") && ($animal instanceof AbstractAnimal)) {
                return array_push($this->productionStorage, $animal->collectAnimalProduction());
            } else {
                throw new Exception('Вы пытаетесь собрать продукцию не у животного или такого животного нет!');
            }
        }
    }
}
