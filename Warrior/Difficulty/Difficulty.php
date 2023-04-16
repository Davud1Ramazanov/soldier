<?php
abstract class Difficulty extends Foot{
    private $type_difficult;
    private $endurance;
    private $protection;
    private $speed;
    private $hp;

    public function __construct($type_difficult, $endurance, $protection, $speed, $hp)
    {
        $this->type_difficult = $type_difficult;
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
        $this->hp = $hp;
    }


    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
    }

    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setProtection($protection)
    {
        $this->protection = $protection;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getProtection()
    {
        return $this->protection;
    }
}
?>
