
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

           private $nom;
           private  $prenom;
           private  $age;


           /*constructeur pour initialiser les attribut d'une instance
             à chaque fois que l'on vaa créer une nouvelle instance cet objet, on aura besoin 
             de la passer les attribut de cette classe
           */

           public function __construct($nom,$prenom,$age){
               $this->$nom =  $nom; //égale nom veut dire que le nom sera celui fournier lors de el'instanciation
               $this->$prenom = $prenom;
               $this->$age = $age;
           }

           //fonction setter pour $age
       
            public function setAge($age){

              if(is_int($age) &&  $age >= 1 && $age <= 120){ //condition pour empecher la modification de l'age en string
                $this->$age = $age;
                }else{
                throw new Exception("L'age de l'Employé devrait etre un entier supérieur à 1 et inférieur à 120");
                 }
            
             }

           function presentation($nom,$prenom,$age){
            echo "Je suis ".$this->$nom."".$this->$prenom." et j'ai ".$this->$age. " ans";

              }
          

           // presentation("Jean","Dupond",54);
       
      
          }

             $employe1 = new Employe("Jean ", "Durant", 45);
        
             $employe1->setAge(12);
             $employe1->presentation("Jean ", "Durant", 45);




       //classe Patron

       class Patron extends Employe{

               private $voiture;


               public function __construct($nom,$prenom,$age,$voiture){
                       parent::__construct($nom,$prenom,$age);// pour appeler le constucteur de la classe parent
                       $this->$voiture = $voiture;
            }

               public function rouler($voiture){
                   echo"Bonjour je roule avec".$this->$voiture;
               }

                //le setter est indispensable pour pour instancier l'objet
               public function setVoiture($voiture){
                   $this->$voiture = $voiture;
               }
       }

       $patron1  = new Patron("Eric","Durant",74,"Mercedes");
       //pour appeler une méthode sur l'objet, il faut bien la passer les arguments
       $patron1->presentation("Eric","Durant",74,"Mercedes");
       $patron1->rouler("Mercedes");
     

       
   ?>

