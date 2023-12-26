
<?php

// Création d'une classe 

class Utilisateur {
    private String $nom;
    private  String$prenom;
    private String $email;

    public function __construct(String $nom,String  $prenom,String  $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }

    public function getNom() :String {
        return $this->nom;
    }

    public function setNom(String $nom) {
        $this->nom = $nom;
    }

    public function getPrenom() :String {
        return $this->prenom;
    }

    public function setPrenom(String $prenom) {
        $this->prenom = $prenom;
    }

    public function getEmail():String {
        return $this->email;
    }

    public function setEmail(String $email) {
        $this->email = $email;
    }
}

// Utilisation de la portée "protected"

class Animal {
    protected String $nom;

    public function setNom(String$nom) {
        $this->nom = $nom;
    }
}

class Chat extends Animal {
    public function getNom() :String {
        return $this->nom;
    }
}

$monChat = new Chat();
$monChat->setNom("Minou");
echo $monChat->getNom(); // affiche "Minou"