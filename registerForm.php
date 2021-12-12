<?php

    require_once('connection.php');

    $msg = '';
    $error = '';

    if (isset($_POST['register'])) {
      # code...
      $fullname = $_POST['fullname'];
      $nama = mysqli_real_escape_string($conn, $fullname);
      $username = $_POST['username'];
      $nama_user = mysqli_real_escape_string($conn, $username);
      $password = $_POST['password'];
      $password_user = mysqli_real_escape_string($conn, $password);
      $datebirth = $_POST['datebirth'];
      $ttl = mysqli_real_escape_string($conn, $datebirth);

      if (!empty(trim($nama)) && !empty(trim($nama_user)) && !empty(trim($password_user)) && !empty(trim($ttl))) {
          # code...
          $query = "INSERT INTO user (fullname, username, password, daybirth) VALUES (
              '$nama',
              '$nama_user',
              '$password_user',
              '$ttl' )";
          mysqli_query($conn, $query);
      } else {
          $error = "Data form tidak boleh ada yang kosong !";
          #echo '<script>alert("Data tidak boleh kosong");</script>';
      }
    } else {
      echo "Kesalahan " . mysqli_error($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="style/Css.css" />
    <link rel="stylesheet" href="style/header.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light header">
      <div class="container-fluid">
        <a class="navbar-brand logo" href="#">Burger Shot.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="Tentang.html">Tentang</a>
            <a class="nav-link" href="Order.html">Order</a>
            <?php
              if ($_SESSION['status'] == 'login') { ?>
                # code...
                <a class="nav-link" href="Profil.html">Profil</a>
              <?php
              } else { ?>
                <a class="nav-link" href="registerForm.php">Login</a>
              <?php
              }
            ?>
          </div>
        </div>
      </div>
    </nav>
    <!-- End of Header -->

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4">
            <?php if($error != '') { ?>
              <div class="alert alert-danger" role="alert"><?= $error; ?></div>
            <?php } ?>
                <div class="card" style="box-shadow: 0 5px 10px rgba(189, 195, 199,1.0);">
                    <div class="card-body">
                        <h4>Sign Up</h4>
                        <form action="registerForm.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Fullname</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username anda">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password anda">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Datebirth</label>
                                <input type="date" class="form-control" name="datebirth" placeholder="YYYY/mm/dd">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-lg btn-warning mb-1" name="register" value="Register"> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>