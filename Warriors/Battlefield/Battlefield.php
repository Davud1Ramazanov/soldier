    <?php

    class Battlefield
    {
        private $squad_first;
        private $squad_second;

        public function __construct($squad_first, $squad_second)
        {
            $this->squad_first = $squad_first;
            $this->squad_second = $squad_second;
        }

        public function Battle()
        {
            while (count($this->squad_first->getWarriors()) > 0) {
                for ($i = 0; $i < count($this->squad_first->getWarriors()); $i++) {
                    $attacker = $this->squad_first->getWarriors()[$i];
                    $defender = $this->squad_second->getWarriors()[$i];

                    $attacker->attack($attacker->getType());
                    $attacker->move();
                    $defender->defend($attacker->getType());

                    if ($attacker->getEndurance() < 0) {
                        $this->squad_first->delWarriors($attacker);
                    }
                }
            }
        }
    }

    ?>
