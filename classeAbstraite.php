<?php


  /*chaque classe ici qui hérite cette classe, devra déclare la focntion absraite
  une classe abstraite apporte aussi des méthodes et des attributs*/


abstract class Humain{
    private $nom;
    private  $prenom;
    private  $age;



    public function __construct($nom,$prenom,$age){
        $this->$nom =  $nom; //égale nom veut dire que le nom sera celui fournier lors de el'instanciation
        $this->$prenom = $prenom;
        $this->$age = $age;
    }

    public function setAge($age){

        if(is_int($age) &&  $age >= 1 && $age <= 120){ //condition pour empecher la modification de l'age en string
          $this->$age = $age;
          }else{
          throw new Exception("L'age de l'Employé devrait etre un entier supérieur à 1 et inférieur à 120");
           }
      
       }

       public function getAge($age){
        return $this->$age;
    }
     //fonction abstraite obligatoires dans les classes filles
    abstract function niveauEtude();

  }

?>