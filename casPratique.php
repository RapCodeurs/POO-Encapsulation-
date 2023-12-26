<?php

/*
Vous êtes développeur web au sein d’une équipe de 10 personnes et devez réaliser une application de e-commerce pour l’entreprise BigBroZer en vue de permettre le fichage de personnes. 
Supposons que nous ayons une classe "Client" qui stocke des informations sur les clients d'une entreprise. 
La classe contient les propriétés "nom", "adresse", "email" et "numéro de téléphone". 
Nous voulons utiliser l'encapsulation pour protéger ces propriétés et permettre l'accès à ces propriétés uniquement via des méthodes publiques.

Question
Écrivez la classe "Client" en respectant les principes de visibilité et d’encapsulation, 
puis écrivez le code permettant d’instancier un objet de la classe "Client" avec les informations de votre choix et d’afficher ces informations, 
il vous est impossible d’utiliser uniquement les méthodes magiques.
*/

class Client {
    private String $nom;
    private String  $adresse;
    private String  $email;
    private String  $telephone;

    public function getNom() : String  {
        return $this->nom;
    }

    public function setNom(String $nom) {
        $this->nom = $nom;
    }

    public function getAdresse() : String {
        return $this->adresse;
    }

    public function setAdresse(String $adresse) {
        $this->adresse = $adresse;
    }

    public function getEmail() :String  {
        return $this->email;
    }

    public function setEmail(String $email) {
        $this->email = $email;
    }

    public function getNumero():String  {
        return $this->telephone;
    }

    public function setNumero(String $telephone) {
        $this->telephone = $telephone;
    }

//MÉTHODES MAGIQUES
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

$client = new Client();
$client->setNom("John Doe");
$client->setAdresse("123 rue de la Paix");
$client->setEmail("johndoe@example.com");
$client->setNumero("01 23 45 67 89");

echo $client->getNom(); // affiche "John Doe"
echo $client->getAdresse(); // affiche "123 rue de la Paix"
echo $client->getEmail(); // affiche "johndoe@example.com"
echo $client->getNumero(); // affiche "01 23 45 67 89"
