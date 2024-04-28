<?php

        $servername = "localhost";
        $dbname = "ecom2";
        $username = "root";
        $password = "";

        $dbco = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
        $dbco -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




?>