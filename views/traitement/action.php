<?php
// besoin de notre le model qui a a son toura inclu bdd
require_once "../../models/actorModel.php";
// besoin de notre le model qui a a son toura inclu bdd

require_once "../../models/filmModel.php";
// ici on traite nos formulaire
// RECUPERE LE FORMULAIRE DE ADD ACTOR

if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    actor::addactor($name,$email);

    
}


// RECUPERE LE FORMULAIRE DE ADD ACTOR

if(isset($_POST['submit1'])){
    $title = htmlspecialchars($_POST['title']);
    $number_total_actors = htmlspecialchars($_POST['number_total_actors']);
    $number_main_actors = htmlspecialchars($_POST['number_main_actors']);
    
    Film::addfilm($title, $number_main_actors, $number_total_actors);

    
}




// methode delete
if (isset($_GET['id_film'])) {

    $filmDelete = htmlspecialchars($_GET['id_film']);

 

    Film::deleteFilm($filmDelete);

}
