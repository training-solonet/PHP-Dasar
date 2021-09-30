<?php
$conn = mysqli_connect("Localhost", "root", "", "crudjoin");

function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($dataGuru = mysqli_fetch_assoc($result)) {
        $rows[] = $dataGuru;
    }

    return $rows;
}

function insert($method)
{
    global $conn;

    $id_mapel = $method["id_mapel"];
    $nama_guru = $method["nama_guru"];
    $id_kelas = $method["id_kelas"];



    $query = "INSERT INTO
            guru (
                nama_guru,
                id_kelas,
                id_mapel
            ) VALUES 
            (
                '$nama_guru',
                '$id_kelas',
                '$id_mapel'
            )
        ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
