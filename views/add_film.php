<?php 


include_once 'inc/header.php' ;
?>

<div class="container">

   <form action="traitement/action.php" method="post">
         
         <div class="form-group">
         <label for="firstname">Title :</label>
         <input type="text" class="form-control" id="firstname" name="title" >
         </div>
         
         <div class="form-group">
         <label for="lastname">number_main_actors :</label>
         <input type="number" class="form-control"  name="number_main_actors" >
         </div>
         
   
         
         <div class="form-group">
         <label for="password">number_total_actors :</label>
         <input type="number" class="form-control" id="password" name="number_total_actors" >
         </div>
         
    
         
         
         <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="submit1" value="submit1">Submit</button>
   </form>



<?php include_once 'inc/footer.php' ;?>