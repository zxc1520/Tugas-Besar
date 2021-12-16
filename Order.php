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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style/header.css" />
    <link rel="stylesheet" type="text/css" href="style/Css.css" />
    <!-- <link rel="stylesheet" type="text/css" href="style/bootstrap-4.4.1.css"> -->
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Order</title>
  </head>
  <body>
    
    <?php include_once('header.php');?>

    <!--JAVASCRIPT-->
    <div class="container" style="margin-top: 3.5rem;">
    <h1>ORDER</h1>
    <div class="form">
      <form action="post" name="formku">
        <table>
          <tr>
            <td>ID Pembeli</td>
            <td>:</td>
            <td><input type="text" class="" name="id" /></td>
          </tr>
          <tr>
            <td>Nama Pembeli</td>
            <td>:</td>
            <td><input type="text" class="" name="nama" /></td>
          </tr>
          <tr>
            <td>Status Pembeli</td>
            <td>:</td>
            <td>
              <input type="radio" class="" name="status" value="member" />Member
              <br />
              <input type="radio" class="" name="status" value="non_member" />Non Member
            </td>
          </tr>
          <tr>
            <td>Nama Jenis Item</td>
            <td>:</td>
            <td>
              <select name="jenis" id="jenis" onchange="harga()">
                <option value="reguler">Reguler</option>
                <option value="heartstopper" selected>Heart Stopper</option>
                <option value="milkshake">Milkshake</option>
                <option value="cola">Cola</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Harga Satuan</td>
            <td>:</td>
            <td>
              <input type="number" name="harga_satu" class="" readonly />
            </td>
          </tr>
          <tr>
            <td>Jumlah Pesanan</td>
            <td>:</td>
            <td><input type="number" class="" name="jumlah" /></td>
          </tr>
          <tr>
            <td>Total Harga</td>
            <td>:</td>
            <td><input type="number" value="" name="total" size="9" readonly /></td>
          </tr>
        </table>
        <table>
          <tr>
            <td><input type="button" name="submit" value="Submit" onclick="receipt()" /></td>
            <td><input type="reset" name="Reset" value="Reset" /></td>
          </tr>
        </table>
      </form>
    </div>
    </div>
    
    <footer class="footer mt-auto py-3 bg-danger text-white">
      <div class="container">
        <p>&copy; <?= date("Y") ?> <strong>Burger Shot.</strong> All right Reserved. </p>
      </div>
    </footer>

  </body>
  <script>
    function harga() {
      var jenis = formku.jenis.value;
      var harga_satuan = 0;
      switch (jenis) {
        case "reguler":
          harga_satuan = 29500;
          break;

        case "hearstopper":
          harga_satuan = 41000;
          break;

        case "milkshake":
          harga_satuan = 19000;
          break;

        case "cola":
          harga_satuan = 8000;
          break;
      }
      formku.harga_satu.value = harga_satuan;
    }
    function receipt() {
      var id = formku.id.value;
      var nama = formku.nama.value;
      var status = formku.status.value;
      var jenis = formku.jenis.value;
      var harga_satuan = 0;
      var jumlah = formku.jumlah.value;
      var total_harga = 0;

      /*
        document.write (id + "<br>");
        document.write (nama + "<br>");
        document.write (status + "<br>");
        document.write (jenis + "<br>");
        document.write (jumlah + "<br>");
        */

      switch (jenis) {
        case "reguler":
          harga_satuan = 29500;
          break;

        case "hearstopper":
          harga_satuan = 41000;
          break;

        case "milkshake":
          harga_satuan = 19000;
          break;

        case "cola":
          harga_satuan = 8000;
          break;
      }
      /*document.write (harga_satuan + "<br>");*/

      if (status == "member") {
        if (jumlah == 1) {
          total_harga = (harga_satuan * jumlah * 95) / 100;
        } else if (jumlah >= 2 && jumlah <= 3) {
          total_harga = (harga_satuan * jumlah * 93) / 100;
        } else {
          total_harga = (harga_satuan * jumlah * 90) / 100;
        }
      } else if (status == "non_member") {
        if (jumlah == 1 || jumlah == 2) {
          total_harga = harga_satuan * jumlah;
        } else if (jumlah >= 3 && jumlah <= 5) {
          total_harga = (harga_satuan * jumlah * 95) / 100;
        } else {
          total_harga = ((harga_satuan * 95) / 100) * jumlah;
        }
      }
      formku.total.value = total_harga;
      /*
        document.write (total_harga + "<br>");
        */
    }
  </script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
