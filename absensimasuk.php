<!DOCTYPE html>
<?php
include('koneksi.php');
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Absensi Masuk</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/logoleaa.png" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="assets/images/logolea.png" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Absensi Masuk</p>
              <form action="" method="post">
                  <div class="form-group">
                    <label for="nama" class="sr-only">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group mb-4">
                    <label for="nim" class="sr-only">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" placeholder="NIM">
                  </div>
                  <button type="submit" class="btn btn-block login-btn mb-4" name="submit">Submit</button>
                </form>
                <!-- <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
                 -->
                <nav class="login-card-footer-nav">
                  <a href="https://instagram.com/leasiunand">Ig: @leasiunand</a>
                  <a href="http://lea.si.fti.unand.ac.id/">Web: lea.si.fti.unand.ac.id</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
      <?php 

  if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $nim = $_POST['nim'];
      $jenis = 'masuk';
      date_default_timezone_set('Asia/Jakarta');
      $date = date('Y-m-d');
      $time = date('H:i:s');
            
      $result = mysqli_query($db,"INSERT INTO absensi VALUES('','$nama','$nim','$jenis','$date','$time')") or die(mysqli_error($db));   
            if ($result > 0) {
                echo "
                <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.html';
                </script>
                ";
            } else {
                echo "
                <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'absensimasuk.php';
                </script>
                ";
            }
        }
        ?>

    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
