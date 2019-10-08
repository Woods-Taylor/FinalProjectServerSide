<!doctype html>
<html lang="en">
<?php
if(isset($_POST['Search'])) {
    getData();
} else {
    echo 'fail';
};
  <?php require 'functions.php';?>
  <?php noCache(); ?>
  <?php getRandomComic(); ?>
</html>
