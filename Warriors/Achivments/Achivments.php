<?php
abstract class Achivments
{
    private $bonus_endurance;
    private $bonus_protection;
    private $bonus_speed;

    public function __construct($bonus_endurance, $bonus_protection, $bonus_speed)
    {
        $this->bonus_endurance = $bonus_endurance;
        $this->bonus_protection = $bonus_protection;
        $this->bonus_speed = $bonus_speed;
    }
}
?>
