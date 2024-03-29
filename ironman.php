<!doctype html>
<html lang="en">
  <?php require 'functions.php';?>
  <?php noCache(); ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <?php head(); ?>
  <body>
    <?php nav_bar(); ?>

    <!-- Page specific content will go down here. -->
    <div class="center">
      <div id="random">
        <?php getRandomComic(); ?>
      </div>

      <input id="search" type="text" placeholder="Type here">
      <input id="submit" type="submit" value="Search">
      <!-- Javascript implementing jQuery and ajax in order to dynamically load content from the getRandom.php page -->
      <script>
        $(document).ready(function(){
        $("#submit").click(function(){
          $.ajax({
            url: "test.php",
            data: {'random' : true},
            dataType:"HTML",
            success: function(data){
            console.log("Success");
            $("#random").html(data);
          }});
         });
        });
      </script>
      <!-- Page specific content ends here. -->
    <?php getIronMan(); ?>
    </div>
    <!-- Page specific content ends here. -->




    <?php footer(); ?>
  </body>
</html>
