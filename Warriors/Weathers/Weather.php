<?php
abstract class Weather
{
    private $endurance;
    private $speed;

    public function __construct($endurance, $speed)
    {
        $this->endurance = $endurance;
        $this->speed = $speed;
    }

    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}
?>
