<?php
// apl a la bdd
require_once "database.php";

// creation de la classe film pour add-film
class Film{

    // ajoueter les movie
  public static function addfilm($title, $number_main_actors, $number_total_actors){
       $db = Database::dbConnect();

    $request = $db->prepare("INSERT INTO film (title, number_main_actors, number_total_actors) VALUES (?,?,?)");
    try {
          $request->execute(array($title, $number_main_actors, $number_total_actors));
        //   header("Location:http://localhost/biblio_poo/views/list_book.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

  }




    //2.movie afficher la liste des movies

    public static function findAllFilm(){

      //   se connecter
           $db = Database::dbConnect();
          $request = $db->prepare("SELECT * FROM film");
        //   ECXECUTER
          try {
          $request->execute();
          // recuperer les tablresultateau de la request dans un tableau
          $listFilm = $request->fetchALL();
        //   return $listActor qui stock les valeur du tableau cad les acters et sera utiliser pour
        //  afficher les acterq quand on fera apple a la fonction listacteur() dans listacter
          return  $listFilm ;
        } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }


        //3.faire le delete
         public static function  deleteActorById($film_id){
        $db = Database::dbConnect();

        $request = $db->prepare("DELETE FROM film WHERE id_film = ?");
        try {
            $request->execute(array($film_id));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}


