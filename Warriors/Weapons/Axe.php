<?php
abstract class Axe extends Weapons
{
    public function __construct()
    {
        $this->type = 'axe';
        $this->endurance = 87;
        $this->power = 49;
    }
}
?>
