<?php

abstract class Commander extends Warrior
{
    private $name;
    private $rank;
    private $reputation;
    private $weapon;
    private $endurance;
    private $protection;
    private $speed;


    public function __construct($name, $weapon, $endurance, $protection, $speed)
    {
        $this->name = $name;
        $this->rank = 1;
        $this->reputation = 10;
        $this->achivments_command = array(new AchivmentsWarrior());
        $this->weapon = $weapon;
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
    }

    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    public function getSpecialization()
    {
        return $this->specialization;
    }

    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
    }

    public function setProtection($protection)
    {
        $this->protection = $protection;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function getReputation()
    {
        return $this->reputation;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }

    public function getProtection()
    {
        return $this->protection;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}

?>