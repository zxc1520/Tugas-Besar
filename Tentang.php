<!--R Sunu Raihan Wicaksono-->
<!-- Afif Qomarul Ghulam -->
<!--TI 2A-->
<?php
  session_start();
  error_reporting(0);
  if ($_SESSION['status'] != 'login') {
    # code...
    echo "<script>console.log('Not logged in yet')</script>";
  }
?>

<html>
  <head>
    <title>Tentang</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="style/header.css" />
    <link rel="stylesheet" type="text/css" href="style/Css.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var propertiPeta = {
          center: new google.maps.LatLng(-8.065062959295098, 111.9006872177124),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
        };
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        // membuat Marker
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(-8.065062959295098, 111.9006872177124),
          map: peta,
          animation: google.maps.Animation.BOUNCE,
        });
      }

      google.maps.event.addDomListener(window, "load", initialize);
    </script>
  </head>

  <body>
    <!--HEADER-->
    <!-- <div id="background">
      <div class="header">
        <a href="Beranda.html" class="Logo">Burger Shot.</a>
        <div class="header-right">
          <a href="Beranda.html">Beranda</a>
          <a class="active" href="Tentang.html">Tentang</a>
          <a href="Order.html">Order</a>
          <a href="Profil.html">Profil</a>
        </div>
      </div> -->

      <!-- Header -->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light header">
        <div class="container-fluid">
          <a class="navbar-brand logo" href="#">Burger Shot.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
              <a class="nav-link active " href="#">Tentang</a>
              <a class="nav-link" href="Profil.php">Profil</a>
              <?php
                if ($_SESSION['status'] == 'login') { ?>
                  <a class="nav-link" href="Order.php">Order</a>
                  <a class="nav-link" href="logout.php">Logout</a>
                <?php
                } else { ?>
                  <a class="nav-link" href="loginForm.php">Login</a>
                <?php
                }
              ?>
            </div>
          </div>
        </div>
      </nav>
    <!-- End of Header -->

      <!--KONTEN-->
      <div class="container-satu">
        <div class="kolom-utama">
          <h1>Profil Burger Shot</h1>
          <p>
            Restoran ini di buka tahun 2021 dengan pembuat bernama R. Sunu Raihan Wicaksono. R. Sunu Raihan Wicaksono sudah menekuni dunia burger sejak lama dan impiannya membuka resto burger begitu besar. Restoran ini berfokus pada menu
            burger.
          </p>
          <p>
            Kami menyajikan cita rasa burger yang otentik. Kami mendatangkan para chef profesional di bidang burger. Kami juga mendatangkan bahan-bahan segar dari penjual lokal untuk mendorong ekonomi lokal berkembang, dan Kami juga
            mendatangkan bahan-bahan otentik burger yang tidak terdapat di Indonesia. Adonan kami buat dengan tingkat akurasi tinggi sehingga menghasilkan burger yang lezat.
          </p>
          <p>Restoran kami buka setiap hari jam 10.00 - 22.00. Dan alamat kami berada di Jl. Los Santos No. 911, Bogor Kami juga menerima pesanan dalam jumlah besar.</p>

          Contact Person : 911 <br />
          Instagram : @burgershot <br />
          Email : burgershot@gmail.com <br /><br />

          <h2>Posisi Restoran Burger Shot</h2>
          <div id="googleMap" style="width: 100%; height: 380px"></div>
        </div>

        <div class="sidebar-dua">
          <img src="" alt="" />
          <br />
          <img src="" alt="" />
          <br />
          <img src="" alt="" />
        </div>
      </div>

      <!--FOOTER-->
      <div class="footer">
        <p>© 2021 Burger Shot. All right Reserved.</p>
      </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
