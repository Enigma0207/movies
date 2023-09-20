<!-- Pour la class 'Actor' créée dans le fichier "actorModel.php" nous aurons 5 méthodes :
	1- addActor(),
    2- findAllActors(), 
    3- updateActorById($id), 
    4- deleteActorById($id), 
    5- findActorById($id)
    Idem pour la class Film -->
    

<?php
require_once "database.php";

// 1actor.creation de la classe actor pour add-actor
class actor{

    // ajoueter les acteur
  public static function addactor($name, $email){
       $db = Database::dbConnect();

    $request = $db->prepare("INSERT INTO actor (name, email) VALUES (?,?)");
    try {
          $request->execute(array($name, $email));
        //   header("Location:http://localhost/biblio_poo/views/list_book.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

  }


    //2.actor afficher la liste des acteurn ca se fait sans paramettre

    public static function findAllActor(){

      //   se connecter
           $db = Database::dbConnect();
          $request = $db->prepare("SELECT * FROM actor");
        //   ECXECUTER
          try {
          $request->execute();
          // recuperer les tablresultateau de la request dans un tableau
          $listActor = $request->fetchALL();
        //   return $listActor qui stock les valeur du tableau cad les acters et sera utiliser pour
        //  afficher les acterq quand on fera apple a la fonction listacteur() dans listacter
          return  $listActor ;
        } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }

}



































    ; ?>