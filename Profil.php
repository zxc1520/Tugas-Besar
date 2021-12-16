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
    <title>Profil</title>
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" type="text/css" href="style/Css.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>
  <body>
    <?php include_once('header.php'); ?>
    <div class="container" style="margin-top: 5.5rem;">
       <!--KONTEN-->>
       <div class="card">
        <img src="mg/profil.jpeg" alt="" />
        <h1>R Sunu Raihan Wicaksono</h1>
        <p class="title">TI2A - 1941720100</p>
        <p>Politeknik Negeri Malang</p>
        <div style="margin: 24px 0">
          <a href="https://www.instagram.com/han_risa/"><i class="fa fa-instagram"></i></a>
        </div>
        <a href=""
          ><p><button>Contact</button></p></a
        >
      </div>

      <div class="card">
        <h1>Afif Qomarul Ghulam</h1>
        <p class="title">TI 2A - 2041720176</p>
        <p>Politeknik Negeri Malang</p>
        <div style="margin: 24px 0">
          <a href="https://www.instagram.com./czxgdge1w2/"><i class="fa fa-instagram"></i></a>
          <a href="https://zxc1520.github.io/"><i class="fa fa-github"></i></a>
        </div>
        <a href=""
          ><p><button>Contact</button></p></a
        >
      </div>
    </div>

    <footer class="footer mt-auto pt-3 bg-danger text-white">
      <div class="container">
        <p>&copy; <?= date("Y") ?> <strong>Burger Shot.</strong> All right Reserved. </p>
      </div>
    </footer>

    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
