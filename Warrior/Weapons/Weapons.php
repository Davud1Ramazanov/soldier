<?php
    abstract class Weapons{
        private $type;
        private $endurance;
        private $power;

        public function __construct($type, $endurance, $power)
        {
            $this->type = $type;
            $this->endurance = $endurance;
            $this->power = $power;
        }

        public function setEndurance($endurance)
        {
            $this->endurance = $endurance;
        }

        public function setPower($power)
        {
            $this->power = $power;
        }

        public function setType($type)
        {
            $this->type = $type;
        }

        public function getEndurance()
        {
            return $this->endurance;
        }

        public function getPower()
        {
            return $this->power;
        }

        public function getType()
        {
            return $this->type;
        }

    }
?>
