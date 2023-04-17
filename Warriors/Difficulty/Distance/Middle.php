<?php
abstract class Middle extends Easy{
    private $endurance;
    private $protection;
    private $speed;
    private $weapon;

    public function __construct($endurance, $protection, $speed, $weapon)
    {
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
        $this->weapon = $weapon;
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
}
?>
