<?php
abstract class Peak extends Weapons
{
    private $type;
    private $endurance;
    private $power;
    private $peak;

    public function __construct($type, $endurance, $power, $peak)
    {
        $this->type = $type;
        $this->endurance = $endurance;
        $this->power = $power;
        $this->peak = $peak;
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

    public function setPeak($peak)
    {
        $this->peak = $peak;
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

    public function getPeak()
    {
        return $this->peak;
    }
}
?>
