<?php
abstract class Easy extends Difficulty{
    private $endurance;
    private $protection;
    private $speed;
    private $weapon;
    private $shield;

    public function __construct($endurance, $protection, $speed, $weapon, $shield)
    {
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
        $this->weapon = $weapon;
        $this->shield = $shield;
    }


    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
    }


    public function setProtection($protection)
    {
        $this->protection = $protection;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }

    public function getProtection()
    {
        return $this->protection;
    }
}
?>
