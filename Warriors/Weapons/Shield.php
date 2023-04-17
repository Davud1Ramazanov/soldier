<?php
//Щит
abstract class Shield extends Weapons{
    private $protection;
    private $visibility;
    private $durability;

    public function __construct()
    {
        $this->protection = 43;
        $this->visibility = 34;
        $this->durability = 39;
    }
}
?>
