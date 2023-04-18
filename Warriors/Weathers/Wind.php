<?php
abstract class Wind extends Weather{
    public function __construct()
    {
        $this->endurance = -3;
        $this->speed = -3;
    }
}
?>
