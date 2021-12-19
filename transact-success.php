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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="style/Css.css" />
    <link rel="stylesheet" href="style/header.css">
    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/bootstrap.css">
</head>
<body>
    
    <?php require_once('header.php');?>

    <div class="card">
        <div class="card-header">
            <h3>Transaction</h3>
        </div>
        <div class="card-body">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>No Id Pesanan</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Jenis</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include_once "connection.php";

                    $id = $_POST['id_order'];

                    $query = "SELECT * FROM user_order WHERE id_order = $id";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?= $row['id_order']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['status']; ?></td>
                    <td><?= $row['jenis']; ?></td>
                    <td><?= $row['jumlah']; ?></td>
                    <td><?= $row['harga_satu']; ?></td>
                    <td>Rp. <?= $row['total']; ?></td>
                </tr>
                <?php
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>