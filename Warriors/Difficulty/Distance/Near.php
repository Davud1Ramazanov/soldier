<?php

class Near extends Easy
{
    private $endurance;
    private $protection;
    private $speed;
    private $sword;
    private $spear;
    private $saber;
    private $shield;

    public function __construct($endurance, $protection, $speed, $weapon, $shield)
    {
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
        $this->sword = new Sword();
        $this->spear = new Spear();
        $this->saber = new Saber();
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

    public function getSword()
    {
        return $this->sword;
    }

    public function getSaber()
    {
        return $this->saber;
    }

    public function getSpear()
    {
        return $this->spear;
    }
}

?>
