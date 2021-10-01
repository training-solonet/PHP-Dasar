<?php 

include('koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM siswa WHERE id = $id";  

$result = mysqli_query($conn, $query); //berfungsi untuk mengirimkan perintah query ke database mysql.

$row = mysqli_fetch_array($result); // berfungsi untuk menangkap data dari hasil perintah 

?>



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
<div class="container" style="margin-top : 90px">
    
    <div class="row">   
        <div class="card">
            <div class="card-header mb-2">
                EDIT Data Siswa
            </div>
            <form method=POST action="update-siswa.php">
            <input type="hidden" name="id" value="<?php echo $row['id']?>">

            <div class="mb-3">
                <label class="form-label">Nama Siswa</label>
                <input name="nama" value="<?php echo $row['nama']?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label class="form-label">NIS</label>
                <input name="nis"    value="<?php echo $row['nis']?>" type="text" class="form-control" id="exampleInputPassword1" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                    <?php

                    if($row['jenis_kelamin'] == 'L'){
                        echo '<option selected value="L">Laki-laki</option>'.'<option value="P">Perempuan</option>';
                    }else {
                        echo '<option selected value="P">Perempuan</option>'.'<option value="L">Laki-laki</option>';
                    }
                    
                    ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input name="kelas" value="<?php echo $row['kelas'];?>" type="text" class="form-control" id="exampleInputPassword1" required>
            </div>
            <button type="submit" class="mb-2 btn btn-primary">Submit</button>
            </form>

        </div>
    </div>    
</div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<!-- 
    src :
    nis
    jenis_kelamin
    nama
    kelas
-->