<?php
abstract class Heavy extends Armor{
    public function __construct()
    {
        $this->protection = 77;
        $this->endurance = 97;
        $this->weight = 20;
    }
}
?>