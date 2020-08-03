
 <?php

 /*
*******************************Pourquoi la POO**************************
*************************************************************************

*Organisation du code avec les Classes

  Une clesse est une moule pour créer nos objets
*Sécurité du code avec l'encapsulation
*Réutilsation du code avec l'héritage
*Avoir plus de Controle avec les classes abstraites et les interfaces
*Enfin l'abstration et polymorphisme


/********************************INTERFACE*******************************
 * **********************************************************************/


 /* une forme de contrat des fonctions qu'on met en place pour que toutes les classes qui souhaitent 
 *travailler avec nos objets doivent respecter
 *
 * *t'es employé, respecte nos méthode
 * t'es patron, respecte nos méthodes
 * /
  *à chaque fois qu'on déclare une classe qui implemente une interface, elle doit contenir des méthodes
  déclarées dans l'interface, au final la fonction aura différentes comportement et c'est ce que l'on appelle
  la polymorphisme

 */



interface Travailleur{

    public function travailler();

    
}

    class Employe implements Travailleur{

           private $nom;
           private  $prenom;
           private  $age;


           /*constructeur pour initialiser les attribut d'une instance
             *à chaque fois que l'on vaa créer une nouvelle instance cet objet, on aura besoin 
             *de la passer les attribut de cette classe
           */

           public function __construct($nom,$prenom,$age){
               $this->$nom =  $nom; //égale nom veut dire que le nom sera celui fournier lors de el'instanciation
               $this->$prenom = $prenom;
               $this->$age = $age;
           }

           //fonction travailler exigée par l'interface Travailleur qu'on implemente

            public function travailler(){
                echo"Je suis l'employé et je bosse";
            }

            /*ici on oblige de passe en argument un object qui implémente 
            l'interface travailleur, cest àdire objets existants*/

            public function faireTravailler(Travailleur $objet){
                var_dump("Travail en cours :{$objet->travailler()}");
              }

           //fonction setter pour $age
       
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

           function presentation($nom,$prenom,$age){
            echo "Je suis ".$this->$nom."".$this->$prenom." et j'ai ".$this->$age. " ans";

              }
          

           // presentation("Jean","Dupond",54);
       
      
          }

             $employe1 = new Employe("Jean ", "Durant", 45);
        
             $employe1->setAge(12);
             $employe1->presentation("Jean ", "Durant", 45);

           


       //classe Patron

       /**à noter: on peut redefinir une fonction dans la classe enfant */

    class Patron extends Employe{

               private $voiture;


            public function __construct($nom,$prenom,$age,$voiture){
                       parent::__construct($nom,$prenom,$age);// pour appeler le constucteur de la classe parent
                       $this->$voiture = $voiture;
            }

               public function rouler($voiture){
                   echo"Bonjour je roule avec".$this->$voiture;
               }

               public function travailler()
               {
                   echo"Je suis le patron et je préside";
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
            
          // faireTravailler($patron1);
     
          class Etudiant implements Travailleur{
              
            public function travailler(){
                echo"Je suis un étudiant et je révise";
            }
          }
           
       $etudiant = new Etudiant();
      // faireTravailler($etudiant);
       $etudiant->travailler();
       $patron1->travailler();
       $employe1->travailler();
   ?>

