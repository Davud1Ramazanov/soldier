<?php
class AchivmentsCommander
{
    private $bonus_rank;
    private $bonus_reputation;

    public function __construct($bonus_rank, $bonus_reputation)
    {
        $this->bonus_rank = $bonus_rank;
        $this->bonus_reputation = $bonus_reputation;
    }
}
?>
