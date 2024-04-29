<?php

session_start();

//inclure la page de connexion
include_once('../panier/connexion.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="../styles/acceuil.css"/>
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
        <center><h1>Veuillez bien vous connecter ou vous enregistrer . Merci :)</h1></center>
        </div>
    </nav>


    <div>
        <center><button type="button" class="button"><a href="./login.php">Connectez-vous</a></button>
        <button type="button" class="button"><a href="./signup.php">Inscrivez-vous</a></button></center>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $("h1").css("color", "white");
    </script>

<?php
            $reponse = $dbco->prepare('SELECT *FROM articles');
            $reponse -> execute();

            while ($row = $reponse->fetch(PDO::FETCH_ASSOC)) {

        ?>

<div class="containa">
   <p>
    
   <img src="../styles/images/<?php echo $row ['img'];?>" class="img-fluid rounded mx-auto d-bloc" alt="<?php echo $row['nom']; ?>"></center> 

    </p>
</div>
<?php } ?>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> DodoShoes</p>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-github"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
    </footer>


</body>
</html>