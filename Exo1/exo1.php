<?php
// un seul fichier par classe

require 'Personnage.php';

$nyu = new Personnage('Nyu');

// if ($nyu->hp < 100) {
//   $nyu->regen(10);
// }

$hien = new Personnage('Hien');
// if ($hien->hp < 100) {
//   $hien->regen();
// }

$nyu->attack($hien);

var_dump($nyu->getName());
var_dump($nyu->getHp());
var_dump($nyu->faint());
var_dump($hien->getName());
var_dump($hien->getHp());
var_dump($hien->faint());

if ($hien->getHp() <= 0) {
  echo 'Hien has been defeated';
} else {
  echo 'Hien resisted with ' . $hien->getHp() . "HP";
}
