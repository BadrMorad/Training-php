<?php
Class Ordinateur{

    private $_marque;
    private $_cpuClock;

 ... 
  public function __construct($valeur=array()){
    if(!empty($valeur))
    $this->hydrate($valeurs);
  }
  public function hydrate(array $donnees){
    foreach($donnees)
  }
}