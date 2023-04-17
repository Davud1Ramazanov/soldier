<?php
abstract class Peak extends Weapons
{
    private $endurance;
    private $power;
    private $range;

    public function __construct()
    {
        $this->endurance = 85;
        $this->power = 45;
        $this->range = 10;
    }
}
?>
