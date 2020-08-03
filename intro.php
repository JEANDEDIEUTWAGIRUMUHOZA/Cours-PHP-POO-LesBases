
 <?php

 /*
<h1>Pourquoi la POO?</h1>

*Organisation du code avec les Classes

  Une clesse est une moule pour créer nos objets
*Sécurité du code avec l'encapsulation
*Réutilsation du code avec l'héritage
*Avoir plus de Controle avec les classes abstraites et les interfaces
*Enfin l'abstration et polymorphisme

 */

  class Employe{

           public $nom;
           public $prenom;
           public  $age;


           /*constructeur pour initialiser les attribut d'une instance
             à chaque fois que l'on vaa créer une nouvelle instance cet objet, on aura besoin 
             de la passer les attribut de cette classe
           */

           public function __construct($nom,$prenom,$age){
               $this->$nom =  $nom; //égale nom veut dire que le nom sera celui fournier lors de el'instanciation
               $this->$prenom = $prenom;
               $this->$age = $age;
           }

           function presentation($nom,$prenom,$age){
              echo "Je suis ".$this->$nom."".$this->$prenom." et j'ai ".$this->$age. " ans";

            }

          

           // presentation("Jean","Dupond",54);
       
      
        }

        $employe1 = new Employe("Jean ", "Durant", 45);
        $employe1->presentation("Jean ", "Durant", 45);
   ?>

