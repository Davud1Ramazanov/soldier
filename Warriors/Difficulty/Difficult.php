<?php

class Difficult
{
    private $type_difficult;
    private $weight;
    private $endurance;
    private $protection;
    private $speed;
    private $axe;
    private $two_sword;
    private $shield;

    public function __construct($type_difficult, $weight, $endurance, $protection, $speed)
    {
        $this->type_difficult = $type_difficult;
        $this->weight = $weight;
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
        $this->axe = new Axe();
        $this->two_sword = new Sword();
        $this->shield = new Shield();
    }

    public function setTypeDifficult($type_difficult)
    {
        $this->type_difficult = $type_difficult;
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

    public function getTypeDifficult()
    {
        return $this->type_difficult;
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
