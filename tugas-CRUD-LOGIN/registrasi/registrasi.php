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
    <div class='container'>
    <div class="card mb-3">
            <div class="card-header">
                <h3>Registrasi</h3>
            </div>
                <form method=POST action='insert.php'>
                    <div class="mb-3">
                        <label for="user" class="form-label">Username</label>
                        <input name='username' type="text" class="form-control" id="user" aria-describedby="emailHelp" required>
                        <div id="user" class="form-text">isikan username anda</div>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input name='password' type="password" class="form-control" id="pass" required>
                    </div>
                    <div class="mb-3">
                        <label for="pas2" class="form-label">konfirmasi</label>
                        <input name='pass2' type="password" class="form-control" id="pas2" aria-describedby="emailHelp" required>
                        <div id="pas2" class="form-text">ketik ulang password anda</div>
                    </div>
                    <button type="submit" name='submit' class="btn btn-primary">Submit</button>
                </form>      
    </div>
    </div>
</body>
</html>