<?php
//Копье
abstract class Spear extends Weapons
{
    private $endurance;
    private $power;
    private $range;

    public function __construct()
    {
        $this->endurance = 52;
        $this->power = 37;
        $this->range = 15;
    }
}

?>
