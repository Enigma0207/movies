<?php

// session_start();
// on inclu notre nav dans list_book.php pour recuperer les lien

require_once '../models/actorModel.php';
// on fait appl a notre class actor et la valeur de retour de notre methode findAllActor, mais on met ::avant la class pck cest statick
$listActor = actor::findAllActor();
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
        <?php foreach ($listActor as $actor) { ?>
        <div class="actor">
            <h1><?= $actor['id_actor']; ?></h1>
            <h2><?= $actor['name']; ?></h2>
            <p><?= $actor['email']; ?></p>
            
        </div>

        
        <?php } ?>
    </div>



</body>
</html>