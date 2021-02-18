<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Buku Tamu</title>
  </head>
  <body>
    <!-- navbar -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand page-scroll" href="#">Buku Tamu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tampil.php">Daftar Tamu</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

    <!-- akhir navbar -->
<?php
if(isset($_REQUEST['success'])=="done")
{
    echo "<div class='alert alert-primary' role='alert'>Data telah berhasil disimpan!</div>";
}
  ?>
    <div class="container">
      <div class="card">
          <div class="card-header">   
          <h1>Buku Tamu</h1>
          </div>
      <div class="card-body">
         <form action="bukutamu.php" method="POST">
            <div class="row ">
              <div class="col">
                <div class="mb-3">
                  <label for="nama1" class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama" id="nama1">
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="nim1" class="form-label">NIM</label>
                  <input type="text" class="form-control" name="nim" id="nim1">
                </div>
              </div> 
            </div>

            <div class="mb-3">
              <label for="jurusan1" class="form-label">Jurusan</label>
              <input type="text" class="form-control" name="jurusan" id="jurusan1">
            </div>
            <div class="mb-3">
              <label for="alamat1" class="form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat" id="alamat1">
            </div>

            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="tahunsekarang1" class="form-label">Tahun Sekarang</label>
                  <input type="date" class="form-control" name="tahunsekarang" id="tahunsekarang1">
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="tahunlahir1" class="form-label">Tahun Lahir</label>
                  <input type="date" class="form-control" name="tahunlahir" id="tahunlahir1">
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="telp1" class="form-label">Nomor Telepon</label>
              <input type="tel" class="form-control" name="telepon" id="telp1">
            </div>
            <div class="mb-3">
              <label for="komentar1" class="form-label">Komentar</label>
              <input type="text" class="form-control" name="komentar" id="komentar1">
            </div>
            <input type="submit" class="btn btn-primary">
          </form>
        </div>
          </div>
</div>
<!-- nama
no bp
jurusan
alamat
no tlp
tahun skrg
tahu lahir
umur
komentar -->






    <!-- FOOTER -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

  </body>
      
</html>