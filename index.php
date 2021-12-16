<!--R. Sunu Raihan Wicaksono-->
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="style/Css.css" />
    <link rel="stylesheet" href="style/header.css">
    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="jquery-3.5.1.js"></script>
    <script>
      var i = 0;
      $(document).ready(function () {
        $("#slider img").hide();
        showNextImage();
        setInterval("showNextImage()", 3000);
      });

      function showNextImage() {
        i++;
        $("#sliderImage" + i)
          .appendTo("#slider")
          .fadeIn(1100)
          .delay(1100)
          .fadeOut(1100);
        if (i == 4) {
          i = 0;
        }
      }
    </script>
  </head>
  <body>
    <?php include_once('header.php'); ?>
    <!--KONTEN-->
    <div class="Konten shrink-flex-0">
      <h2>BURGER HOUSE TERBAIK DI INDONESIA</h2>
      <p>
        Kami menyajikan burger yang berkualitas tinggi. Dan kami memastikan bahwa burger yang anda pesan berasal dari bahan-bahan yang segar dan didapat dari komoditas lokal. Kami menggunakan bahan-bahan terbaik yang mementingkan mutu dan
        kualitas demi konsumen kami.
      </p>
      <a href="Order.php"
        ><button class="button" style="vertical-align: middle"><span>ORDER </span></button></a
      >
      <br />
    </div>
    
    <div id="background_img">
      <div id="slider">
        <img id="sliderImage1" src="img/delicious-cheeseburger.jpg" />

        <img id="sliderImage2" src="img/front-view-tasty-meat-burger-with-cheese-salad-dark-background.jpg" />

        <img id="sliderImage3" src="img/front-view-vegetarian-burgers-cutting-board.jpg" />

        <img id="sliderImage4" src="img/4486959.jpg" />
      </div>
    </div>

    <div id="background1">
      <img src="" alt="" />
    </div>

    <footer class="footer mt-auto pt-3 bg-danger text-white">
      <div class="container">
        <p>&copy; <?= date("Y") ?> <strong>Burger Shot.</strong> All right Reserved. </p>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
