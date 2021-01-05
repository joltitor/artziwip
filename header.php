<!DOCTYPE html>
<?php
  session_start();
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>nothign</title>
  </head>
  <body>


    <nav>
      <div class="wrapper">
        <ul>
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='profile.php'>profile</a></li>";
              echo "<li><a href='includes/logout.inc.php'>logout</a></li>";
            }
            else {
              echo "<li><a href='login.php'>login</a></li>";
              echo "<li><a href='signup.php'>signup</a></li>";
            }
            ?>
        </ul>
      </div>
    </nav>
