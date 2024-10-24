<?php 
// Classe Ordinateur
class Ordinateur {
    // Propriétés privées pour la marque, la vitesse du CPU et la capacité du disque dur
    private $_marque;
    private $_cpuClock;
    private $_hdd;
    // Constantes pour les capacités de disque dur
    const HDD_SMALL = "250GO";
    const HDD_MEDIUM = "500GO";
    const HDD_BIG = "1TO";
    // Constructeur pour initialiser la marque et la vitesse du CPU
    public function __construct($marque, $cpuClock) {
        $this->_marque = $marque;
        $this->setCpuClock($cpuClock); 
    }
    // Méthode pour obtenir la vitesse du CPU
    public function getCpuClock() {
        return $this->_cpuClock;
    }
    // Méthode pour définir la vitesse du CPU
    public function setCpuClock($cpuClock) {
        $this->_cpuClock = $cpuClock; 
    }
    public function getHdd() {
        return $this->_hdd;
    }
    public function setHdd($capacite) {
        if (in_array($capacite, [self::HDD_SMALL, self::HDD_MEDIUM, self::HDD_BIG])) {
            $this->_hdd = $capacite; // Définit la capacité
        }
    }
    public function __toString() {
        $hdd = $this->_hdd ? $this->_hdd : "Non défini";
        return "Ordinateur marque  : " . $this->_cpuClock ;
    }
    }
$poste = new Ordinateur("Samsung", 2.4);
$poste->setHdd(Ordinateur::HDD_SMALL); // Installation d'un disque dur de 250GO

echo $poste; // Utilise la méthode __toString




