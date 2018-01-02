<?
namespace fhe\models;

class Cat extends \fhe\core\LivingBeing
{
    public function speak()
    {
        echo "I am a $this->gender cat.";
    }
    
}
?>