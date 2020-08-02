
 <?php

 /*
<h1>Pourquoi la POO?</h1>

*Organisation du code avec les Classes

  Une clesse est une moule pour créer nos objets
*Sécurité du code avec l'encapsulation
*Réutilsation du code avec l'héritage
*Controle avec les classes abstraites et les interfaces
*Enfin l'abstration et polymorphisme

 */

  class Employe{

   public $nom;
   public $prenom;
   public  $age;

   function presentation($nom,$prenom,$age){
       echo "Je suis ".$prenom."".$nom." et j'ai ".$age. "ans";

   }

      }

   ?>

