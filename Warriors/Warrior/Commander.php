<?php
abstract class Commander extends Warrior{
    private $rank;
    private $specialization;
    private $reputation;
    private $achivments_command;

    public function __construct($rank, $specialization, $reputation)
    {
        $this->rank = $rank;
        $this->specialization = $specialization;
        $this->reputation = $reputation;
        $this->achivments_command = new AchivmentsCommander();
    }

    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    public function setSpecialization($specialization)
    {
        $this->specialization = $specialization;
    }

    public function setReputation($reputation)
    {
        $this->reputation = $reputation;
    }

    public function getSpecialization()
    {
        return $this->specialization;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function getReputation()
    {
        return $this->reputation;
    }

    public function upRank($amount){
        $this->rank += $amount;
        $this->achivments_command = new AchivmentsCommander($this->rank, $this->reputation);
    }

    public function upReputatuion($amount){
        $this->reputation += $amount;
        $this->achivments_command = new AchivmentsCommander($this->rank, $this->reputation);
    }
}
?>