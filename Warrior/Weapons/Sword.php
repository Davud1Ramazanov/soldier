<?php
abstract class Sword extends Weapons
{
    private $type;
    private $endurance;
    private $power;
    private $blade;
    private $hilt;

    public function __construct($type, $endurance, $power, $blade, $hilt)
    {
        $this->type = $type;
        $this->endurance = $endurance;
        $this->power = $power;
        $this->blade = $blade;
        $this->hilt = $hilt;
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

    public function setBlade($blade)
    {
        $this->blade = $blade;
    }

    public function setHilt($hilt)
    {
        $this->hilt = $hilt;
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

    public function getBlade()
    {
        return $this->blade;
    }

    public function getHilt()
    {
        return $this->hilt;
    }
}
?>
