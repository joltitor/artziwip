<?php
include_once 'header.php';
 ?>


 <section class="signup-form">
   <h2>Sign Up Here!!! Epic!!!</h2>
   <form action="includes/signup.inc.php" method="post">
     <input type="text" name="email" placeholder="email here....">
     <input type="text" name="uid" placeholder="user here....">
     <input type="password" name="pwd" placeholder="password here....">
     <input type="password" name="pwdrepeat" placeholder="check password here....">
     <button type="submit" name="submit">do it....</button>
   </form>
 </section>

<?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>hey man.... u forgot something....</p>";
    }
    else if ($_GET["error"] == "invaliduid") {
      echo "<p>dude ur username sucks lol fix it</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
      echo "<p>nice email kid... u thought u could pull a fast one on me huh</p>";
    }
    else if ($_GET["error"] == "pwdmatchfail") {
      echo "<p>how hard is it to type a password twice</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
      echo "<p>fricking hacker!!!</p>";
    }
    else if ($_GET["error"] == "uidtaken") {
      echo "<p>up high, down low, toooooo slowwww..... someone got that user</p>";
    }
    else if ($_GET["error"] == "none") {
      echo "<p>holy shit u did it</p>";
    }
  }
  ?>


<?php
include_once 'footer.php';
?>
