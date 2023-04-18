<?php
abstract class Rain extends Weather{
    public function __construct()
    {
        $this->endurance = -10;
        $this->speed = -4;
    }
}
?>
