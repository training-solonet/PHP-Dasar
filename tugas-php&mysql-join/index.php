<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container">

        <table class="table">
                <thead>
                    <tr>
                        <td scope="col">No</td>
                        <td scope="col">Nis</td>
                        <td scope="col">Nama</td>
                        <td scope="col">Jenis Kelamin</td>
                        <td scope="col">Kelas</td>
                        <td scope="col">Guru</td>
                        <td scope="col">Mapel</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                        include('config.php');
                        $no = 1;
                        $query = mysqli_query($conn, "SELECT siswa.nis, siswa.nama, siswa.jenis_kelamin, kelas.nama_kelas, guru.nama_guru, mapel.nama_mapel 
                        FROM siswa JOIN kelas ON siswa.kode_kelas=kelas.id 
                        JOIN guru ON siswa.kode_guru=guru.id 
                        JOIN mapel ON siswa.kode_mapel=mapel.id");
                        while($row= mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['nis']?></td>
                        <td><?php echo $row['nama']?></td>
                        <td><?php if($row['jenis_kelamin'] == "L"){
                            echo "Laki-laki";
                        }else {
                            echo "Perempuan";
                        }
                        
                        ?></td>
                        <td><?php echo $row['nama_kelas']?></td>
                        <td><?php echo $row['nama_guru']?></td>
                        <td><?php echo $row['nama_mapel']?></td>
                    </tr>
                    <?php } ?>
                </tbody>
        </table>

</div>




</body>
</html>