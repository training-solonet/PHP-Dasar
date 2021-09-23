
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
                Input Data Siswa
            </div>
            <form method=POST action="simpan-siswa.php">
            <div class="mb-3">
                <label class="form-label">Nama Siswa</label>
                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label class="form-label">NIS</label>
                <input name="nis" type="text" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                        <option selected>pilih</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input name="kelas" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button name="submit" type="submit" class="mb-2 btn btn-primary">Submit</button>
            </form>

        </div>
    </div>    
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>



<!--  
include ('koneksi.php');

if (isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $nis  = $_POST['nis'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];

    $query = "INSERT INTO siswa (nama, nis, jenis_kelamin, kelas) values ('$nama', '$nis', '$jenis_kelamin', '$kelas')";
    $sql = mysqli_query($conn, $query);
    if ($query) {
        header("Location : index.php");
    }else {
        header("Location : index.php?status=gagal");
    }
}
?> -->

