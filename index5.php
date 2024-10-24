<?php
Class Ordinateur {
    private $_marque;// Attribut pour stocker la marque de l'ordinateur
    private $_cpuClock; // Attribut pour stocker la vitesse du processeur
    private static $_nbPostes = 0; // Attribut statique pour compter le nombre d'instances
// Constructeur qui initialise les attributs avec les données fournies
    public function __construct($data){
        $this->_marque = $data[0]; // Initialise la marque
        $this-> _cpuClock = $data [1];
        self::$_nbPostes++;//le compteur est incrémenté 

    } // Méthode pour définir la marque de l'ordinateur
    public function setMarque($marque){
        $this->marque =$marque;

    }// Méthode pour définir la vitesse du processeur
    public function setCpuClock($speed){
        $this->_cpuClock = $speed;
    }
    public static function combien(){//méthode statique
    echo self::$_nbPostes."<br/>";
}

 }
 // Affiche le nombre d'instances avant la création
Ordinateur::combien(); // Affiche 0 

$poste = new Ordinateur(array("Samsung", 2.4)); // Création d'une nouvelle instance
var_dump($poste); // Affiche les détails de l'objet $poste

$poste2 = new Ordinateur(array("Hitachi", 1.6)); // Création d'une autre instance
var_dump($poste2); // Affiche les détails de l'objet $poste2

Ordinateur::combien(); // Affiche 2