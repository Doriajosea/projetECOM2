<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DodoShoes</title>
    <link rel="stylesheet" href="./styles/indes.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


    <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark">
        <div class="container">
          <center><h1>Bienvenue sur le site DodoShoes :) </h1></center>
        
        </div>
    </nav>

    <div>
      <center><h2>Veuillez entrer dans le site</h2>
      <button type="button" class="button"><a href="./authentification/acceuil.php">Cliquez ici svp</a></button></center>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
      $("h1").css("color", "pink");
      $("button").mouseover(function () {
        $(this).css({
          backgroundColor: "grey",
          color: "white",
          fontSize: "20px",
        });
      });
    </script>


      <!-- <script>
        paypal.Buttons (1 createOrder:function(data,ac))
      </script> -->

  <?php include "./vue/footer.php"?>


    </nav>
  </body>
</html>
