<?php

/*
 * Базовый, асбрактный класс животного,
*он содержит общие поля как для курицы так и для коровы
*/
abstract  class AbstractAnimal
{
    /**
     * @var int
     * Хранит уникальный регистрационный номер животного
     * Проинициализированн нулем для последовательной выдачи номеров
     * Для удобства отдельно для кур, отдельно для коров ведется свой учет
     */
    static $identification = 1;

    /**
     * @return mixed
     * Определяет сигнатуру метода для сбора продукции
     */
    abstract public function collectAnimalProduction();

    abstract public function showRegistrationNumber();
}

/*
 * Класс Курицы, наследуется от асбратного класса животного
 * */
class Hen extends AbstractAnimal {

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

    public function showRegistrationNumber()
    {

    }

}

/*
 * Класс Коровы, наследуется от асбратного класса животного
 * */
class Cow extends AbstractAnimal {

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

    public function showRegistrationNumber()
    {

    }

}/*
 * Класс Хлев
 * */
class Barn {

    //Данные константы определяют максимальное количество коров и кур в хлеве
    const MAX_COUNT_OF_COWS = 10;
    const MAX_COUNT_OF_HANS = 20;


    /**
     * @param $hens
     * @return Hen
     * @throws Exception
     *  * Метод реализует логику добавления кур в хлев
     */
    public function addHenToBarn($hens)
    {
        if (count($hens) < self::MAX_COUNT_OF_HANS) {
            return new Hen();
        } else {
            throw new \Exception("В хлеву достаточно кур!");
        }
    }

    /**
     * @param $cows
     * @return Cow|string
     * Метод реализует логику добавления коров в хлев
     */
    public function addCowToBarn($cows)
    {
        if (count($cows) < self::MAX_COUNT_OF_COWS) {
            return new Cow();
        } else {
            return "В хлеву уже достаточно коров";
        }
    }
}

//Инстанцирование экземпляра класса Хлева
$barn = new Barn();

//Хранилище кур и коров
$barn_storage = array();

$hens = [];
$cows = [];

//Цикл регистрации коров
for($i=1;$i<=Barn::MAX_COUNT_OF_COWS;$i++){
    $barn_storage[]=$barn->addCowToBarn($cows);

}

//Цикл регистрации кур
for($i=1;$i<=Barn::MAX_COUNT_OF_HANS;$i++){
    $barn_storage[]=$barn->addHenToBarn($hens);
}

//Инициализация коризины
$milk = 0;
$eggs = 0;

//Код ниже отвечает за сбор продукции
foreach ($barn_storage as $exemplar){

    if (get_class($exemplar) == 'Cow') {
        $milk += $exemplar->collectAnimalProduction();
    } else if (get_class($exemplar) == 'Hen') {
        $eggs += $exemplar->collectAnimalProduction();
    } else {
        throw new \Exception("Такой продукции не существует!");
    }
}

echo "Сбор завершен успешно!".PHP_EOL;

//Вывод конечного количества продукции
print("Количство молока: ".$milk.PHP_EOL);
print("Количство яиц: ".$eggs.PHP_EOL);