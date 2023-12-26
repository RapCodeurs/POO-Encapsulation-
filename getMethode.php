<?php

// Utilisation de la méthode "__get()"

class Produit {
    private $nom;
    private $prix;

    public function __get($propriete) {
        if (property_exists($this, $propriete)) {
            return $this->$propriete;
        }
    }

    public function __set($propriete, $valeur) {
        if (property_exists($this, $propriete)) {
            $this->$propriete = $valeur;
        }
    }
}

$monProduit = new Produit();
$monProduit->nom = "Ordinateur";
$monProduit->prix = 1200;
echo $monProduit->nom; // affiche "Ordinateur"
echo $monProduit->prix; // affiche "1200"