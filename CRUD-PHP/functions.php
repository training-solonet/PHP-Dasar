<?php
$conn = mysqli_connect("localhost", "root", "", "db_siswa");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($data_siswa = mysqli_fetch_assoc($result)) {
        $rows[] = $data_siswa;
    }

    return $rows;
}

function login($method)
{
    if (isset($method["submit"])) {
        $email = $method["email"];
        $password = $method["password"];

        if ($email === "kevinirawan" && $password === "cobalagi") {
            header("Location: homepage.php");
        } else {
            echo "Salah";
        }
    }
}


function insert($method)
{
    global $conn;

    $nis = htmlspecialchars($method["nis"]);
    $jenis_kelamin = htmlspecialchars($method["jenis_kelamin"]);
    $nama = htmlspecialchars($method["nama"]);
    $kelas = htmlspecialchars($method["kelas"]);

    $query = "INSERT INTO siswa
        (nis, jenis_kelamin, nama, kelas)
        VALUES
        ('$nis', '$jenis_kelamin', '$nama', '$kelas')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function delete($id)
{
    global $conn;
    mysqli_query($conn, "DELETE from siswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function update($method)
{
    global $conn;

    $nis = htmlspecialchars($method["nis"]);
    $jenis_kelamin = htmlspecialchars($method["jenis_kelamin"]);
    $nama = htmlspecialchars($method["nama"]);
    $kelas = htmlspecialchars($method["kelas"]);

    $query = "UPDATE siswa SET
            nis = '$nis',
            nama = '$nama',
            jenis_kelamin = '$jenis_kelamin',
            kelas = '$kelas'
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
