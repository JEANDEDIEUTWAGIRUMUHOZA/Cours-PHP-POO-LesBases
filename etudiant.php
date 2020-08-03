<?php
 
 require('classeAbstraite.php');
class Etudiant extends Humain{



    public function __construct($nom,$prenom,$age){
        $this->$nom =  $nom; //égale nom veut dire que le nom sera celui fournier lors de el'instanciation
        $this->$prenom = $prenom;
        $this->$age = $age;
    }

    public function niveauEtude()
    {
        Echo"BAC +4";
    }
}

$etudiant = new Etudiant("Berrcick","Tom",45);
$etudiant->niveauEtude();

?>