<?php

abstract class Commander extends Warrior
{
    private $name;
    private $rank;
    private $specialization;
    private $reputation;
    private $weapon;
    private $endurance;
    private $protection;
    private $speed;


    public function __construct($name, $rank, $specialization, $reputation, $weapon, $endurance, $protection, $speed)
    {
        $this->name = $name;
        $this->rank = $rank;
        $this->specialization = $specialization;
        $this->reputation = $reputation;
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

    public function setSpecialization($specialization)
    {
        $this->specialization = $specialization;
    }

    public function setReputation($reputation)
    {
        $this->reputation = $reputation;
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