<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../styles/acceuil.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="login">

    <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark">
        <div class="container">
        <center><h1>Connectez-vous</h1></center>
        </div>
    </nav>

    <div class="containa">
        <h1>login</h1>
        <form method="post" action="../vue/affichage.php">
                Nom d'utilisateur :
                <input type="text" name="nomUtilisateur" required><br><br>
                Password :
                <input type="password" name="password" required><br><br>

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

        try {
            $dbco = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion réussie";
        } 
        
        catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nomUtilisateur = $_POST['nomUtilisateur'];
            $password = $_POST['password'];
        
            // Requête SQL pour vérifier les informations dans la base de données
            $sql = "SELECT * FROM user WHERE nomUser=? AND password=? ";
            $stmt = $dbco->prepare($sql);
            $stmt->execute([$nomUtilisateur, $password]);
        
            if ($stmt) {
                // Si les informations sont correctes, redirection vers une page de succès ou accès autorisé
                header("Location: affichage.php");
                exit();
            } else {
                // Si les informations sont incorrectes, affichage d'un message d'erreur
                $error_message = "Identifiants incorrects. Veuillez réessayer.";
            }
        }
        
        // Fermeture de la connexion à la base de données
        $dbco = null;
        ?>

?>