<?php
abstract class Armor{
    private $protection;
    private $endurance;
    private $weight;

    protected function __construct($protection, $endurance, $weight)
    {
        $this->protection = $protection;
        $this->endurance = $endurance;
        $this->weight = $weight;
    }

    public function setProtection($protection)
    {
        $this->protection = $protection;
    }

    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getProtection()
    {
        return $this->protection;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
?>
