<?php

//inclure la page de connexion
include('../panier/connexion.php');


    //verifier si une session existe
    if(!isset($_SESSION)){
        //si non demarrer la session
        session_start();
    }

    // Creer la session
    if(!isset($_SESSION['panier'])) {
        // s'il n;existe pas une session 
        $_SESSION['panier'] = array();
    }

    //Recuperer de l'id dans le lien
    if (isset($_GET['id'])){ // si un id a ete envoye alors :
        $id = $_GET['id'];

        //verifier grace a l'id si le produit existe dans la base de donnee

        $reponse = $dbco-> prepare("SELECT *FROM articles WHERE id = $id");
        $reponse->execute();
        if(empty($reponse->fetch(PDO::FETCH_ASSOC))){
            die("Ce produit n'existe pas");
        }

        if(isset($_SESSION['panier'][$id])){
            $_SESSION['panier'][$id]++; //Represente la quantite
        }
        else {
            //si non on ajoute le produit
            $_SESSION['panier'][$id] = 1;
        }

        //redirection vers la page index.php
        header("location:affichage.php");

        

    }

?>