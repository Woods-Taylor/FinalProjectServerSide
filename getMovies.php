<!doctype html>
<html lang="en">
  <?php require 'functions.php';?>
  <?php noCache(); ?>
  <!-- <script type='text/javascript'>alert("PHP blows");</script>"; -->
  <?php
    if(isset($_POST['Search'])) {
        testgetMovies("Pass");
    } else {
        testgetMovies("Fail");
    };
  ?>

</html>
