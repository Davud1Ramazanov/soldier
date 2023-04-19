<?php

class Difficult extends Difficulty
{
    private $endurance;
    private $weight;
    private $protection;
    private $speed;
    private $weapon;
    private $shield;


    public function __construct($weight, $endurance, $protection, $speed, $weapon, $shield)
    {
        $this->weight = $weight;
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

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getProtection()
    {
        return $this->protection;
    }


    public function getEndurance()
    {
        return $this->endurance;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}

?>
