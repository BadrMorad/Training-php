<?php
Class Ordinateur {
    private $_marque;
    private $_modele;

    private $_ecran;
    private $_statut =0; // 0singnifié éteint,1 signifie allumé
    


//Méthod publique pour allumer l'ordinateur 
    public function allumer(){ 
            $this->statut =1; // Allum l'ordinateur en modifiant le statut 
    }
}
// Création d'une instance de la classe Ordinateur 
$poste =new Ordinateur();


echo "bonjou";
