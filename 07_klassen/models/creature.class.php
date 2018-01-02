<?
namespace fhe\models;
use \fhe\core\LivingBeing;

class Creature extends LivingBeing
{
    public function __construct()
    {
        parent::__construct('uni');
    }
}
?>