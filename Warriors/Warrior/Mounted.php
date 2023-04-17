<?php

abstract class Mounted extends Warrior
{
    private $name;
    private $endurance; //выносливость
    private $protection; //защита
    private $speed; //скорость
    private $weapon;
    private $armor;
    private $myHourse;
    private $shield;

    public function __construct($name, $weapon, $armor, $myHourse = null, $shield = null)
    {
        $this->name = $name;
        $this->endurance = 100;
        $this->protection = 100;
        $this->speed = 10;
        $this->weapon = $weapon;
        $this->armor = $armor;
        $this->myHourse = new Horse();
        $this->shield = $shield;
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

    public function attack($endurance, $protection, $speed)
    {
        if ($endurance < 20) {
            return "I'm feeling weak, I need to rest before attacking!";
        }
        $attackPower = $this->myHourse->getForce() * $this->getEndurance() / 100;
        $accuracy = $this->getSpeed() * 0.5 + $this->myHourse->getSpeed() * 0.5;
        $hitChance = rand(1, 100);
        if ($hitChance <= $accuracy) {
            return "The attack hits the target with a power of $attackPower!";
        } else {
            return "The attack misses the target!";
        }
    }

    public function defend($endurance, $protection)
    {
        if ($endurance < 20) {
            return "I'm feeling weak, I need to rest!";
        } else {
            $defenseScore = $endurance + $protection;
            $opponentAttackScore = rand(30, 100);
            if ($defenseScore > $opponentAttackScore) {
                return "I successfully defended the attack!";
            } else {
                return "I was unable to defend the attack.";
            }
        }
    }

}

?>
