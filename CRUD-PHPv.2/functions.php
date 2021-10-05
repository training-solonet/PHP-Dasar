<?php
$connection = mysqli_connect("localhost", "root", "123", "db_siswa");

function query($query)
{
    global $connection;

    $result = mysqli_query($connection, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function insert($method)
{
    global $connection;

    $nis = htmlspecialchars($method["nis"]);
    $jenis_kelamin = htmlspecialchars($method["jenis_kelamin"]);
    $nama = htmlspecialchars($method["nama"]);
    $id_kelas = htmlspecialchars($method["id_kelas"]);

    $query = "INSERT INTO siswa
            (
                nis,
                jenis_kelamin,
                nama,
                id_kelas
            ) VALUES 
            (
                '$nis',
                '$jenis_kelamin',
                '$nama',
                '$id_kelas'
            )";

    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}


function update($method)
{
    global $connection;

    $id = $method["id"];
    $nis = htmlspecialchars($method["nis"]);
    $jenis_kelamin = htmlspecialchars($method["jenis_kelamin"]);
    $nama = htmlspecialchars($method["nama"]);
    $id_kelas = htmlspecialchars($method["id_kelas"]);

    $query = "UPDATE siswa SET
            nis = '$nis',
            jenis_kelamin = '$jenis_kelamin',
            nama = '$nama',
            id_kelas = '$id_kelas'
            WHERE id = $id";

    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}

function delete($id)
{
    global $connection;

    mysqli_query($connection, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($connection);
}

function regist($method)
{
    global $connection;

    $username = stripslashes(htmlspecialchars(mysqli_real_escape_string($connection, $method["username"])));
    $password = htmlspecialchars(mysqli_real_escape_string($connection, $method["password"]));
    $confirmPassword = $method["confirmPassword"];

    $result = mysqli_query($connection, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert ('Username Already Exist');
            </script>
        ";
        return false;
    }

    if ($password !== $confirmPassword) {
        echo "
            <script>
                alert ('Password not same');
            </script>
        ";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "
        INSERT INTO user
        (
            username,
            password
        )
        VALUES
        (
            '$username',
            '$password'
        )
    ";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
