<?php
        $servername = "localhost";
        //$username = "root";
        $username = "u410658578_cash";
        //$password = "";
        $password = "Hostinger_73";
        $dbname = "u410658578_cash";
        $con = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($con,"utf8");
        if ($con->connect_error) 
        {
         die("Connection failed: " . $con->connect_error);
        } 

?>