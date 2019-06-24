<?php

        $servername = "sql190.main-hosting.eu";
        $username = "u410658578_cash";
        $password = "Hostinger_73";
        $dbname = "u410658578_cash";
        $connection = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($connection,"utf8");
        if ($connection->connect_error) 
        {
         die("Connection failed: " . $connection->connect_error);
        } 

?>