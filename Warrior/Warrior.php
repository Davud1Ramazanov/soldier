<?php

abstract class Warrior
{
    private $name;
    private $endurance;
    private $protection;
    private $speed;

    public function __construct($name, $endurance, $protection, $speed)
    {
        $this->name = $name;
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
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

    public abstract function attack($endurance, $protection, $speed);

    public abstract function defend($endurance, $protection);
}
?>