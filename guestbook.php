<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Buku Tamu Diskominfo Provinsi Kalimantan Selatan</title>
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-light">

  <div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="LogoDiskominfo.png" alt="" width="84" height="127">
        <h5>BUKU TAMU PENGUNJUNG</h5>
        <h3>DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI KALIMANTAN SElATAN</h3>
        <div class="callout-warning">Dibawah ini adalam form untuk Buku Tamu. Pengunjung dapat mengisi secara lengkap dan jelas untuk kedatangannya juga perihal nya. Hal ini membantu kami untuk pencatatan kunjungan pada kantor Diskominfo Provinsi Kalimantan Selatan ini</div>
      </div>
      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Tentang Diskominfo Provinsi Kalimantan Selatan</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0"><span class="badge bg-primary rounded-pill">i</span> Diskominfo Provinsi Kalimantan Selatan</h6>
                <br><small class="text-muted">Dinas ini adalah kependekan dari Dinas Komunikasi dan Informatika yang bertugas secara wilayah provinsi untuk menangani segala sesuatu yang berhubungan dengan Teknologi atau Informasi</small>
              </div>
            </li>
            <a href="welcome.php" class="btn btn-primary" tabindex="-1" role="button">Kembali ke Halaman Depan</a>
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Data Diri</h4>
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Nama Depan</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Nama Depan belum diisi
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Nama Belakang</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Nama Belakang belum diisi
                </div>
              </div>

              <div class="col-12">
                <label for="telepon" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="address" placeholder="Contoh : 08XX-XXXX-XXXX" required>
                <div class="invalid-feedback">
                  Nomor Telepon belum diisi
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Alamat Email<span class="text-muted"> (Opsional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="contoh@domain.com">
                <div class="invalid-feedback">
                  Email belum diisi
                </div>
              </div>

              <div class="col-12">
                <label for="asal_instansi" class="form-label">Asal Instansi atau Kantor</label>
                <input type="text" class="form-control" id="address" placeholder="Isi asal dari instansi atau kantor Anda..." required>
                <div class="invalid-feedback">
                  Asal Instansi atau Kantor Anda belum diisi
                </div>
              </div>

              <div class="col-md-5">
                <label for="tujuan_bidang" class="form-label">Tujuan Bidang / Ruang</label>
                <select class="form-select" id="country" required>
                  <option value="">Sentuh untuk melihat pilihan...</option>
                  <option>Kepala Dinas</option>
                  <option>Sekretariat</option>
                  <option>Bidang Informasi Publik dan Statistik</option>
                  <option>Bidang Komunikasi Publik</option>
                  <option>Bidang E-Goverment</option>
                  <option>Bidang Persandian dan Keamanan Informasi</option>
                  <option>Sekretariat Pranata Komputer</option>
                  <option>Pranata Komputer</option>
                  <option>LPPL Abdi Persada</option>
                </select>
                <div class="invalid-feedback">
                  Harap pilih Bagian yang hendak dikunjungi
                </div>
              </div>

              <div class="col-12">
                <label for="keperluan" class="form-label">Keperluan</label>
                <input type="text" class="form-control" id="address" placeholder="Isi keperluan atau perihal Anda..." required>
                <div class="invalid-feedback">
                  Keperluan atau Perihal Anda belum diisi
                </div>
              </div>

              <div class="my-3">
                <h4 class="mb-3">Jenis Kunjungan</h4>
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                  <label class="form-check-label" for="kunjungan_pertama">Kunjungan Pertama</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="kunjungan_lanjutan">Kunjungan Lanjutan</label>
                </div>
              </div>
              <hr class="my-4">

              <button class="w-100 btn btn-primary btn-lg" type="submit">Kirim Data Diri</button>
          </form>
        </div>
      </div>
    </main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="form-validation.js"></script>
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">&copy; 2021 Dinas Komunikasi Dan Informatika Prov. Kalsel</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="https://diskominfomc.kalselprov.go.id/" class="nav-link px-2 text-muted">Halaman Utama Diskominfo Kalimantan Selatan</a></li>
        </ul>
      </footer>
    </div>
</body>

</html>