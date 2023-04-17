<?php
abstract class Axe extends Weapons {
    private $endurance;
    private $power;

    public function __construct()
    {
        $this->endurance = 87;
        $this->power = 49;
    }
}
?>
