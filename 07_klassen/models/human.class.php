<?
namespace fhe\models;

class Human extends \fhe\core\LivingBeing
{
    function __construct($fName, $lName, $gender)
    {
        parent::__construct($gender);
        $this->firstName = $fName;
        $this->lastName = $lName;
        ++self::$countHumans;
    }

    public function __destruct()
    {
        --self::$countHumans;
    }

    public function speak()
    {
        echo 'Hi, my name is ' . $this->name() . "! I am a $this->gender human.";
    }

    public function birthday()
    {
        return new \DateTime();
    }

    public function name()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    private $firstName;
    private $lastName;
    private static $countHumans = 0;
}
?>