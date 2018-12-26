<?php

    $servername = "localhost";
    $username = "root";
    $pass = "";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=p7", $username, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }

?>