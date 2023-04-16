<?php
class Horse{
    private $force;
    private $endurance;
    private $speed;
    private $sustainability;

    public function __construct($force, $endurance, $speed, $sustainability)
    {
        $this->force = $force;
        $this->endurance = $endurance;
        $this->speed = $speed;
        $this->sustainability = $sustainability;
    }

    public function setForce($force)
    {
        $this->force = $force;
    }

    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function setSustainability($sustainability)
    {
        $this->sustainability = $sustainability;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getSustainability()
    {
        return $this->sustainability;
    }

    public function getForce()
    {
        return $this->force;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }
}
?>
