<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
        <link rel="stylesheet" href="../styles/acceuil.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>

    <body class="signup">
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark">
            <div class="container">
            <center><h1>Inscrivez-vous</h1></center>
            </div>
        </nav>
        <div class="containa">
            <form method="post" action="./affichage.php">
                Nom :
                <input type="text" name="nom" required><br><br>
                Prenom :
                <input type="text" name="prenom" required><br><br>
                Nom d'utilisateur :
                <input type="text" name="nomUtilisateur" required><br><br>
                Password :
                <input type="password" name="password" required><br><br>
                Email :
                <input type="text" name="email" required><br><br>

                <center><input type="submit" name ="submit"></center>

            </form>
        </div>    

    <center><button type="button" class="button"><a href="./acceuil.php">Retour a la page d'acceuil</a></button></center>


    </body>
</html>


<?php

require ('../classes/utilisateurs.php');
require ('../classes/gestionUtilisateurs.php');

$servername = "localhost";
$dbname = "ecom2";
$username = "root";
$password = "";

        $dbco = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
        $dbco -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        extract($_POST);

        if (isset($submit)) {
            if ($nom == "" || $prenom == "" || $nomUtilisateur == "" || $email == "" || $password = "") {
                echo "Veuillez rentrer quelque chose";
            }
            else {
                $u = new Utilisateurs(0, $nom, $prenom, $nomUtilisateur, $email, $password);
                $gestion = new GestionUtilisateurs($dbco);
                $gestion -> ajouterUtilisateurs($u);
                echo "Personne ajoutee avec succes";
            }
        }

?>