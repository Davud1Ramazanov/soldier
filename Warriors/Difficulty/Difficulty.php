<?php
abstract class Difficulty extends Foot{
    private $type_difficult;
    private $endurance;
    private $protection;
    private $speed;

    public function __construct($type_difficult, $endurance, $protection, $speed)
    {
        $this->type_difficult = $type_difficult;
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
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
}
?>
