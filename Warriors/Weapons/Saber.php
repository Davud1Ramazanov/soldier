<?php
// Сабля
abstract class Saber extends Weapons {

    private $endurance;
    private $power;

    public function __construct()
    {
        $this->endurance = 62;
        $this->power = 58;
    }
}
?>
