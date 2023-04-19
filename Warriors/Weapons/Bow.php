<?php
//Лук
abstract class Bow extends Weapons
{
    private $range;

    public function __construct()
    {
        $this->type = 'bow';
        $this->endurance = 100;
        $this->power = 85;
        $this->range = 50;
    }
}
?>
