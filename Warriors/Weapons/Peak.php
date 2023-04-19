<?php
abstract class Peak extends Weapons
{
    public function __construct()
    {
        $this->type = 'peak';
        $this->endurance = 85;
        $this->power = 45;
    }
}
?>
