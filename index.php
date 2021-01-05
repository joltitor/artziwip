<?php
include_once 'header.php';
 ?>

<section class="index-intro">
  <?php
    if (isset($_SESSION["useruid"])) {
      echo "<p> welcome to hell " . $_SESSION["useruid"] . "</p>";
    }
   ?>
<div class="wrapper">
  <h1>header beder</h1>
  <p>peanus weanus</p>

<?php
include_once 'footer.php';
?>
