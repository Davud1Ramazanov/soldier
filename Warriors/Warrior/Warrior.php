<?php

abstract class Warrior
{
    private $name;
    private $endurance;
    private $protection;
    private $speed;
    private $weapon;
    private $armor;
    private $achivments_warrior;

    protected function __construct($name, $endurance, $protection, $speed, $weapon, $armor)
    {
        $this->name = $name;
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
        $this->weapon = $weapon;
        $this->armor = $armor;
        $this->achivments_warrior = new AchivmentsWarrior();
    }

    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
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


    public function getName()
    {
        return $this->name;
    }

    public function getProtection()
    {
        return $this->protection;
    }

    public function attack($weapon) {
        echo "Hit using: {$weapon->getType()}";
        $this->endurance= $this->endurance-($weapon->getPower())+($this->armor->getProtection());
        echo "The {$this->name} has endurance: { $this->endurance}";
    }

    public function defend($weapon) {
        echo "Defense with weapons: {$weapon->getType()}";
    }

    public function movement() {
        echo "A {$this->name} moves at the speed of: {$this->speed}";
    }
}
?>