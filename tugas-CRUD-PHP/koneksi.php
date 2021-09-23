<!-- membuat koneksi mysql ke php -->

<?php 

// deklarasi variable 
$host = "localhost";      //server lokal
$user = "root";           // user
$pass = "";               // pw   
$dataBase = "data_siswa"; //nama database

$conn = mysqli_connect($host, $user, $pass, $dataBase); //mengkoneksi mysql ke php

?>