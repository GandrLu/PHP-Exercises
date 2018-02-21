<?
namespace fhe\core;

abstract class LivingBeing
{
    public function __construct($gender)
    {
        $this->gender = $gender;
    }

    public function speak()
    {
        echo 'I can´t do anything.';
    }

    protected $gender;
}