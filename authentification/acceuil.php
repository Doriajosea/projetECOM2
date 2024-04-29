<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/acceuil.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        /* Styles CSS pour le footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            /* Autres styles personnalisés pour le footer */
        }
    </style>


</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark">
        <div class="container">
        <center><h1>Veuillez bien vous connecter ou vous . Merci :)</h1></center>
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



    <footer>
    <p>&copy; <?php echo date("Y"); ?> Mon site web. Tous droits réservés.</p>
    <!-- Vous pouvez ajouter d'autres informations de pied de page ici -->
    </footer>



</body>
</html>