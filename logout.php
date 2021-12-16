<?php
    session_start();
    session_destroy();
?>

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="style/Css.css" />
    <link rel="stylesheet" href="style/header.css">
    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/bootstrap-4.4.1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="jquery-3.5.1.js"></script>

<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light header">
      <div class="container-fluid">
        <a class="navbar-brand logo" href="#">Burger Shot.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="Tentang.php">Tentang</a>
            <a class="nav-link" href="Order.php">Order</a>
            <?php
              if ($_SESSION['status'] == 'login') { ?>
                <a class="nav-link" href="Profil.php">Profil</a>
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

    <div class="flex">
    <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="text-center">Anda telah berhasil logout!</h1>
              <p class="text-center">Silahkan melanjutkan ke halaman beranda</p>
              <p>&nbsp;</p>
              <p class="text-center"><a class="btn btn-lg btn-warning mb-1" href="index.php" role="button">Kembali</a> </p>
            </div>
          </div>
        </div>
      </div>
      </div>