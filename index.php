<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DodoShoes</title>
    <link rel="stylesheet" href="./styles/indes.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/cacbcc77eb.js"
      crossorigin="anonymous"
    ></script>
    <style>
        /* Styles CSS pour le conteneur */
        .container {
            max-width: 1200px; /* Largeur maximale du conteneur */
            margin: 0 auto; /* Centrer le conteneur horizontalement */
            padding: 0 20px; /* Ajouter un peu d'espace autour du contenu à l'intérieur du conteneur */
            /* Autres styles personnalisés pour le conteneur */
        }
    </style>
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

<div class="containa">
   <p>
    
    Découvrez un monde scintillant où chaque bijou raconte une histoire. Explorez notre collection 
    exquise de bijoux soigneusement sélectionnés pour leur beauté intemporelle et leur qualité exceptionnelle. </p>
    
    <p>Que vous cherchiez à ajouter une touche d'élégance à votre tenue quotidienne ou à trouver le cadeau parfait pour un être cher, 
    notre boutique en ligne propose une gamme variée de bijoux, des classiques intemporels aux pièces tendance. </p>

    <p>Laissez-vous séduire par notre sélection de bagues étincelantes, de colliers délicats, de bracelets élégants et bien plus encore. 
    Chaque bijou est conçu pour capturer l'essence de la féminité et ajouter une touche de luxe à votre style. </p>

    <p>Avec des matériaux de haute qualité et un savoir-faire artisanal, nos bijoux sont destinés à être chéris pour les années à venir. 
    Parcourez notre collection dès aujourd'hui et laissez-vous inspirer par la beauté éclatante des bijoux.
    </p>`,
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> DodoShoes</p>
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-github"></i>
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-instagram"></i>
    </footer>


    </nav>
  </body>
</html>
