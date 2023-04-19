<?php
// Сабля
abstract class Saber extends Weapons {
    public function __construct()
    {
        $this->type = 'saber';
        $this->endurance = 62;
        $this->power = 58;
    }
}
?>
