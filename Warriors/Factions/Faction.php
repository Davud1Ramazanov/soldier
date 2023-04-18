<?php
abstract class Faction
{
    private $endurance;
    private $protection;
    private $speed;

    public function __construct($endurance, $protection, $speed)
    {
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
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
