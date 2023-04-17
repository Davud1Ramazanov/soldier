<?php
abstract class Sword extends Weapons
{
    private $endurance;
    private $power;

    public function __construct()
    {
        $this->endurance = 90;
        $this->power = 70;
    }
}
?>
