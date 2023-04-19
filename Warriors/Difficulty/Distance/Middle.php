<?php

class Middle extends Easy
{
    private $endurance;
    private $protection;
    private $speed;
    private $bow;

    public function __construct($endurance, $protection, $speed)
    {
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
        $this->bow = new Bow();
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

    public function getBow()
    {
        return $this->bow;
    }
}

?>
