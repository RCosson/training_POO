<?php

class Personnage{
  private $hp = 100;
  private $det = 120;
  private $name;

  //toutes les variables doivent être en private et pour y accéder on doit créer des getters (getName, getHP etc...)

  //private permet de montrer aux autres devs travaillant sur notre code de savoir quelles fonctions toucher ou ne pas toucher (et aussi pour donner du contexte)

  public function __construct($name) {
    $this->name = $name;
  }

  //construct permet de construire une variable à partir des données passées dans l'instanciation

  public function getName(){
    return $this->name;
  }

  public function getHp(){
    return $this->hp;
  }

  public function getDet(){
    return $this->det;
  }

  public function regen($hp = null){
    if ($hp == null) {
      $this->hp = 100;
    } else {
      $this->hp = $this->hp + $hp;
    //$this->hp += vie; <- pareil
    }
  }

  // en gros avec le $this, si on appelle la fonction pour Nyu, il va forcément concerner Nyu uniquement et augmenter ses HP mais pas ceux des autres !
  // $this fait référence à l'objet sur lequel la méthode est utilisée

  public function yell(){
    echo "inv pls";
  }

  private function belowZero(){
    if ($this->hp < 0) {
      $this->hp = 0;
    }
  }

  public function faint(){
    return $this->hp == 0;
    //false si vivant, true si mort
    }
  public function attack($target){
    $target->hp -= $this->det;
    $target->belowZero();
  }
}
