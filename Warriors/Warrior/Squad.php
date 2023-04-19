<?php

class Squad
{
    private $name;
    private $warrios;
    private $min_warrios;
    private $max_warrios;

    public function __construct($name, $commander)
    {
        $this->name = $name;
        $this->min_warrios = 5;
        $this->max_warrios = 25;
        $this->warrios = array();
        array_push($this->warrios, $commander);
    }

    public function setMinWarrios($min_warrios)
    {
        $this->min_warrios = $min_warrios;
    }

    public function setMaxWarrios($max_warrios)
    {
        $this->max_warrios = $max_warrios;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getWarrios()
    {
        return $this->warrios;
    }

    public function delWarrios($warrior)
    {
        array_shift($this->warrios, $warrior);
    }

    public function addWarrios($warrior)
    {
        if ($this->warrios < $this->max_warrios) {
            array_push($this->warrios, $warrior);
        }
    }
}

?>
