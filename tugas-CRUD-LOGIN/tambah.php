


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
        <div class="card mb-3">
            <div class="card-header">
                <h3>Tambah Siswa</h3>
            </div>
            <div class="card-body">
                <form method=POST action="query-insert.php">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nam" name="nama" required>
                            <div id="emailHelp" class="form-text">Tuliskan nama siswa</div>
                        </div>
                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="text" class="form-control" id="ni" name="nis" required>
                            <div id="emailHelp" class="form-text">Tuliskan NIS siswa</div>
                        </div>  
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                                <option selected>Pilih</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Jurusan</label>
                            <select name="kelas" class="form-select" aria-label="Default select example">
                                <option selected>Pilih</option>
                                <option value="1">RPL</option>
                                <option value="2">TKJ</option>
                                <option value="3">OTOMOTIF</option>
                                <option value="4">ELECTRO</option>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success">INPUT</button>
                </form>
            </div>

        </div>      
</div>
        
</body>
</html>