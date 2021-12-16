<?php
    session_start();
    if ($_SESSION['status'] != 'login') {
        # code...
        echo "<script>console.log('Not logged in yet')</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - <?= $_SESSION['username']; ?></title>
    <link rel="stylesheet" href="style/Css.css">
    <link rel="stylesheet" href="style/header.css">
    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
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
              <a class="nav-link" aria-current="page" href="#">Home</a>
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
                  <a class="nav-link" href="userProfile.php">Hi, <?= $_SESSION['username']; ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
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
    
    <div class="container">
        <h2><?= $_SESSION['fullname']; ?></h2>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>