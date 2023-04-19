<?php

abstract class Foot extends Warrior
{
    private $name;
    private $endurance; //выносливость
    private $protection; //защита
    private $speed; //скорость
    private $sword;
    private $armor;
    private $shield;

    public function __construct($name, $armor, $shield = null)
    {
        $this->name = $name;
        $this->endurance = 100;
        $this->protection = 100;
        $this->speed = 10;
        $this->sword = new Sword();
        $this->armor = $armor;
        $this->shield = $shield;
    }

    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setProtection($protection)
    {
        $this->protection = $protection;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getProtection()
    {
        return $this->protection;
    }

    public function getSword()
    {
        return $this->sword;
    }
}

?>
