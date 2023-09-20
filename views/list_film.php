<?php

// session_start();
// on inclu notre nav dans list_book.php pour recuperer les lien

require_once '../models/filmModel.php';
// on fait appl a notre class actor et la valeur de retour de notre methode findAllFilm, mais on met ::avant la class Film pck cest statick
$listFilm = Film::findAllFilm();
; ?>

<!-- dans html on cree un tabelau et la boucle for each pour aficher les acteur -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  -->
    <div class="container">
        <?php foreach ($listFilm as $film) { ?>
        <div class="actor">
            <h1><?= $film['id_film']; ?></h1>
            <h2><?= $film['number_main_actors']; ?></h2>
            <p><?= $film['number_total_actors']; ?></p>
            <p><?= $film['title']; ?></p>
             <a href="traitement/action.php?film=<?= $film['id_film'];?>">delete</a>
           
    
            
        </div>

        
        <?php } ?>
    </div>



</body>
</html>