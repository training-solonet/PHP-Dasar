<?php

    // deklarasi variabel
    $server = "localhost";
    $username = "root";
    $password = "";
    $database= "latihan";

    $conn = mysqli_connect($server, $username, $password, $database);

    if ($conn){
        //echo "<b>Connected </b>";
    }else {
        echo "Disconnected!";
    }
 