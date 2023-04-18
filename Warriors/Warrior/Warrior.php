<?php

abstract class Warrior
{
    private $name;
    private $endurance;
    private $protection;
    private $speed;
    private $weapon;
    private $achivments_warrior;

    protected function __construct($name, $endurance, $protection, $speed, $weapon)
    {
        $this->name = $name;
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
        $this->weapon = $weapon;
        $this->achivments_warrior = new AchivmentsWarrior();
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

    public function upEndurance($amount)
    {
        $this->endurance = $amount;
        $this->achivments_warrior = new AchivmentsWarrior($this->endurance, $this->protection, $this->speed);
    }

    public function upProtection($amount)
    {
        $this->protection = $amount;
        $this->achivments_warrior = new AchivmentsWarrior($this->endurance, $this->protection, $this->speed);
    }

    public function upSpeed($amount)
    {
        $this->speed = $amount;
        $this->achivments_warrior = new AchivmentsWarrior($this->endurance, $this->protection, $this->speed);
    }
}
?>