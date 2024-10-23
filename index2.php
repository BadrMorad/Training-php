<?php
Class Ordinateur{
    private $_marque;
    

    public function __construct($marque){
        $this ->_marque =$marque;

    }
    public function getMarque(){
        return $this->_marque;
}
  }
$poste =new Ordinateur("Samsung");//crééra un objet Ordinateur de marque Samsung
//affichera"Samsung"
echo $poste->getMarque();
