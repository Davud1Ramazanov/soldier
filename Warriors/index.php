<?php

$warrior = new Mounted(new Horse(56, 100, 60, 80));
$warrior2 = new Near(80, 70, 8, new Sword(), new Shield());

$first_squad = new Squad('First', new Commander('Vasiliy', 2, 15, new AchivmentsWarrior(), new Sword(), 100, 80, 10));
$first_squad->addWarrior($warrior);
$first_squad->addWarrior($warrior2);
$first_squad->addWarrior($warrior);
$first_squad->addWarrior($warrior2);
$first_squad->addWarrior($warrior);
$first_squad->addWarrior($warrior2);


$second_squad = new Squad('Second', new Commander('Petya', 1, 10, new AchivmentsWarrior(), new Sword(), 100, 60, 10));
$second_squad->addWarrior($warrior);
$second_squad->addWarrior($warrior2);
$second_squad->addWarrior($warrior);
$second_squad->addWarrior($warrior2);
$second_squad->addWarrior($warrior);
$second_squad->addWarrior($warrior2);
$battle = new Battlefield($first_squad, $second_squad);
$battle->Battle();


?>
