<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light header">
      <div class="container-fluid">
        <a class="navbar-brand logo" href="#">Burger Shot.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Tentang.php">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Profil.php">Profil</a>
            </li>
            <?php
              if ($_SESSION['status'] == 'login') { ?>
                <li class="nav-item">
                  <a class="nav-link" href="Order.php">Order</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hi, <?= $_SESSION['username']; ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
                </li>
              <?php
              } else { ?>
                <a class="nav-link" href="loginForm.php">Login</a>
              <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Header -->

     <!-- Logout Modal -->
     <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Keluar</h6>
                </div>
                <div class="modal-body">
                    Apakah anda yakin akan keluar dari akun ini ?
                </div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
                    <a class="btn btn-danger" href="logout.php">Sign Out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Logout Modal -->
</body>
</html>