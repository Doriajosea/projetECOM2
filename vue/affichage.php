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
    <title>Boutique</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/affiche.css">
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
            <center><h1>Bienvenue sur notre boutique</h1></center>
            </div>
            <a href="panier.php" class="link"><i class="fa-solid fa-cart-shopping"></i> <span> <?php
                if (isset($_SESSION['panier']) && is_array($_SESSION['panier'])) {
                    echo array_sum($_SESSION['panier']);
                }
                ?></span></a>
        </nav>
    

    <section class="products_list">
        
        <?php
            $reponse = $dbco->prepare('SELECT *FROM articles');
            $reponse -> execute();

            while ($row = $reponse->fetch(PDO::FETCH_ASSOC)) {

        ?>

        <div class="grid">
        <div class="container">
            <form action="" class="product">
                <div class='img-container'>
                    <center><img src="../styles/images/<?php echo $row ['img'];?>" class="img-fluid rounded mx-auto d-bloc" alt="<?php echo $row['nom']; ?>"></center>
                </div>
                <div class="contente">
                    <h4 class="name"> <?php echo $row['nom'];?></h4>
                    <h2 class="price"> <?php echo $row['prix'];?>$</h4>
                    <a href="ajout_panier.php?id=<?php echo $row['id'];?>" class="id_product">Ajouter au panier</a>
                </div>
            </form>
        </div>
        </div>
        <?php } ?>

    </section>
    <footer>
    <p>&copy; <?php echo date("Y"); ?> Mon site web. Tous droits réservés.</p>
    <!-- Vous pouvez ajouter d'autres informations de pied de page ici -->
</footer>
        
        
    
</body>
</html>