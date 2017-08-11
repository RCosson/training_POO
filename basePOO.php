<?php

// instanciation, création de l'objet
// MaDate() = classe, $date = objet/instance

$date = new MaDate();

// propriétés

$date->days;
$date->months;
$date->years;

// méthodes

$date->days();
$date->addDays(2);
$date->format('d/m/Y');
