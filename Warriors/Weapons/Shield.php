<?php
//Щит
abstract class Shield extends Weapons{
    private $protection;
    private $visibility;
    private $durability;

    public function __construct()
    {
        $this->protection = 73;
        $this->visibility = 35;
        $this->durability = 42;
    }
}
?>
