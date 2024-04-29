<?php

session_start();

//inclure la page de connexion
include_once('../panier/connexion.php');


//supprimer les produits si la variable del existe

if (isset($_GET['del'])) {
    $id_del = $_GET['del'];
    //supression
    unset($_SESSION['panier'][$id_del]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="../styles/indes.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/cacbcc77eb.js"
      crossorigin="anonymous"
    ></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</head>
<body class="panier">

    <nav>
        <div class="nav-wrapper grey lighten-2">
            <a href="../index.php" class="link">AcceuiL</a>
            <a href="affichage.php" class="link">Boutique</a>

        </div>
    </nav>

    <section class="contente">
    <table class="stripped highlight" border="1">
        <thead class="white">
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantite</th>
                <th>Action</th>

            </tr>
        </thead>
            <?php
            $total = 0;
            
            if(isset($_SESSION['panier']) && is_array($_SESSION['panier'])) {
                $ids = array_keys($_SESSION['panier']);
            }
            
            if(empty($ids)) {
                echo "Votre panier est vide";
            } else {
               
                $produits = $dbco->prepare("SELECT *FROM articles WHERE id IN (".implode(',',$ids).")");
                $produits->execute();
            
                //liste des produits avec une boucle foreach
                foreach($produits as $produit):
                    //calculer le total (prix unitaire * quantite) et ajouter chaque resultat a chaque tours de boucle
                    $total = $total + $produit['prix'] * $_SESSION['panier'][$produit['id']];

                    ?>
                    <tbody class="rgb(168, 169, 158)">
                        <tr>
                            <td><img src="./images/<?= $produit['img']?>" alt=""></td>
                            <td><?= $produit['nom']?></td>
                            <td><?= $produit['prix']?></td>
                            <td><?=$_SESSION['panier'][$produit['id']] ?> </td>
                            <td><a href="panier.php?del=<?=$produit['id']?>"><i class="fa-solid fa-bucket"></i></a></td>

                        </tr>
                    </tbody>
                    <?php endforeach; } ?>
            <tfoot class="grey">

                    <tr class="total">
                        <th>Total : <?=$total?> </th>
                    </tr>

            </tfoot>
                   
        </table>

        <div id="paypal-button-container">

        </div>
    </section>
    <script src="https://www.paypal.com/sdk/js?client-id=ASKTeQocjY25wXJ_bjrgXMA11puq-7vIyUTuWKcknqJD-PETW4JXvxH792JHO0A5OHRc0I_g_YZROzS-&currency=CAD"></script>
    <script>
        paypal.Buttons({

            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '<?= $total ?>'
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    alert('Transaction complété par ' + details.payer.name.given_name + '!');
                    <?php unset($_SESSION['panier']) ?>
                });
            },
            onError: function(err) {
                console.log("erreur dans le paiement", err);
                alert("paiement échoué!");
            }

        }).render('#paypal-button-container').then(function() {

        });
    </script>

    </section>
   
</body>
</html>