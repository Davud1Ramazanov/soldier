<?php
abstract class Bow extends Weapons{
    private $type;
    private $endurance;
    private $power;
    private $range;

    public function __construct($type, $endurance, $power, $range)
    {
        $this->type = $type;
        $this->endurance = $endurance;
        $this->power = $power;
        $this->range = $range;
    }

    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
    }

    public function setPower($power)
    {
        $this->power = $power;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setRange($range)
    {
        $this->range = $range;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getRange()
    {
        return $this->range;
    }
}
?>
