<?php
// ordinateur.class.php 
Class Ordinateur{
    private $_marque;
    private $_cpuClock;
    private $_hdd;


    const HDD_SMALL ="250GO";
    const HDD_MEDIUM="500Go";
    const HDD_BIG = "1To";

    public function__construct($_marque,$_cpuClock){
        $this-> marque =$_marque;
        $this -> $cpuClock = $cpuClock;

    }
    public function getHdd (){
        return $this->_hdd;

    }
    publicfunction setHdd($capacite){
        // On vérifie qu'on nous donne bien une trois capacités prédéfinies plus haut.
        if (in_array($capacite,[self::HDD_SMALL,]))
    }

}

