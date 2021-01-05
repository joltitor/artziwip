<?php
include_once 'header.php';
 ?>


 <section class="signup-form">
   <h2>Login Here!!! Epic!!!</h2>
   <div class ="signup-form-form">
   <form action="includes/login.inc.php" method="post">
     <input type="text" name="uid" placeholder="user/email here....">
     <input type="password" name="pwd" placeholder="password here....">
     <button type="submit" name="submit">do it....</button>
   </form>
 </div>
</section>

 <?php
   if (isset($_GET["error"])) {
     if ($_GET["error"] == "emptyinput") {
       echo "<p>hey man.... u forgot something....</p>";
     }
     else if ($_GET["error"] == "wronglogin") {
       echo "<p>wrong...try again...</p>";
     }
   }
   ?>
<?php
include_once 'footer.php';
?>
