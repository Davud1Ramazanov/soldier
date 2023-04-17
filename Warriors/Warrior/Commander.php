<?php
abstract class Commander extends Warrior{
    private $rank;
    private $specialization;
    private $achivments;

    public function __construct($rank, $specialization)
    {
        $this->rank = $rank;
        $this->specialization = $specialization;
        $this->achivments = new Achivments();
    }

    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    public function setSpecialization($specialization)
    {
        $this->specialization = $specialization;
    }

    public function getSpecialization()
    {
        return $this->specialization;
    }

    public function getRank()
    {
        return $this->rank;
    }
}
?>