<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="framework/css/bootstrap.min.css" rel="stylesheet">
    <title>Login Admin Buku Tamu Diskominfo Prov. Kalsel</title>
</head>

<body>
    <div class="text-center mt-4">
        <img class="mb-2" src="LogoDiskominfo.png" alt="" width="84" height="127">
        <h1>ADMINISTRASI DATA BUKU TAMU DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI KALIMANTAN SELATAN</h1>
    </div>
    <form class="col-3 mx-auto mt-4 justify-content-center" method="post" action="function/process_admin_login.php">
        <div class="mb-3">
            <label for="exampleInputUsername" class="form-label">Nama Pengguna</label>
            <input type="username" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Sandi</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Jangan lupakan saya</label>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Login</button>
        <p>Jika lupa terhadap nama pengguna dan kata sandi dapat melapor ke operator setempat</p>
    </form>
</body>

</html>