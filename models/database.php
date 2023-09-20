<?php

class Database {
// static pck on a pa besoin  d'instencier la classe dans laquelle elle est implementer(creer)cad pas besoin de new db...
     public static function dbConnect(){
        $db = null;
        try {
            $db = new PDO ("mysql:host=localhost;dbname=best_movies", "root", "");
        } catch (PDOException $e) {
            $db = $e->getMessage();
        }

        return $db;
     }


}