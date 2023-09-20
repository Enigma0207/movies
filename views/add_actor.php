<?php 


include_once 'inc/header.php' ;
?>

<div class="container">

   <form action="traitement/action.php" method="post">
         
         
         <div class="form-group">
         <label for="name">name :</label>
         <input type="text" class="form-control" id="name" name="name" >
         </div>
         
         
         <div class="form-group">
         <label for="email">Email :</label>
         <input type="email" class="form-control" id="email" name="email" >
         </div>
         
         <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="submit" value="submit">Submit</button>
   </form>



<?php include_once 'inc/footer.php' ;?>