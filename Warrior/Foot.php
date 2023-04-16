<?php

abstract class Foot extends Warrior
{
    private $name;
    private $endurance;
    private $protection;
    private $speed;

    public function __construct($name, $endurance, $protection, $speed)
    {
        $this->name = $name;
        $this->endurance = $endurance;
        $this->protection = $protection;
        $this->speed = $speed;
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
        $attackPower = rand(10, 20) * $this->getStrength() / 10;
        $accuracy = $this->getAccuracy() * 0.5 + $this->getSpeed() * 0.5;
        $hitChance = rand(1, 100);
        if ($hitChance <= $accuracy) {
            return "The soldier hits the target with a power of $attackPower!";
        } else {
            return "The soldier misses the target!";
        }
    }

    public function defend($endurance, $protection)
    {
        $protection = rand(20, 40);
        $endurance = rand(40, 60);

        if ($endurance < 30) {
            return "I'm feeling weak, I need to rest!";
        } else {
            $defenseScore = $endurance + $protection;
            $opponentAttackScore = rand(10, 30);
            if ($defenseScore > $opponentAttackScore) {
                return "The soldier successfully defended the attack!";
            } else {
                $damage = rand(10, 20);
                $endurance -= $damage;
                return "The soldier was unable to defend the attack and takes $damage damage. Endurance: $endurance";
            }
        }
    }
}

?>
