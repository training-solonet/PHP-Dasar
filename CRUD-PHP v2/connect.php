<?php

    // deklarasi variabel
    $server = "localhost";
    $username = "root";
    $password = "";
    $database= "latihan";

    $connection = mysqli_connect($server, $username, $password, $database);

    if ($connection){
        //echo "<b>Connected </b>";
    }else {
        echo "Disconnected!";
    }
    // else {
    //     echo "Disconnected".mysqli_connect_eror();
    // }