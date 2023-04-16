<?php
abstract class Easy extends Difficulty{
    private $type_difficult;
    private $type_distance;
    private $endurance;
    private $protection;
    private $speed;

    public function __construct($type_difficult,$type_distance , $endurance, $protection, $speed)
    {
        $this->type_difficult = $type_difficult;
        $this->type_distance = $type_distance;
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
    }


    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
    }

    public function setTypeDistance($type_distance)
    {
        $this->type_distance = $type_distance;
    }

    public function setProtection($protection)
    {
        $this->protection = $protection;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }

    public function getTypeDifficult()
    {
        return $this->type_difficult;
    }
    public function getProtection()
    {
        return $this->protection;
    }
}
?>
