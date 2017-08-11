<?php

/**
* class Form
* permet de générer un formulaire rapidement et simplement
*/

class Form {

  /**
  *@var array données utilisées par le formulaire
  */

  private $data;

  /**
  *@var string Tag utilisé pour entourer les champs
  */

  public $surround = 'p';

  /**
  * @param array $data Données utilisées par le formulaire
  */

  public function __construct($data = array()){
    $this->data = $data;
  }

  /**
  * @param $html Code HTML à entourer
  * @return string
  */

  private function surround($html){
    return "<{$this->surround}>{$html}</{$this->surround}>";
  }

  /**
  * @param $name string
  * @return string
  */

  public function input($name){
    return $this->surround("<input type='text' name='" . $name . "'>");
  }

  /**
   * geenrate submit form button
   * @return string
   */

  public function submit(){
    return $this->surround("<button type='submit'>Submit</button>");
  }
}
