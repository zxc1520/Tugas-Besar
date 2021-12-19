<?php
    session_start();
    error_reporting(0);
    if ($_SESSION['status'] != 'login') {
        # code...
        echo "<script>console.log('Not logged in yet')</script>";
    }
    include_once "connection.php";

    $id_order = $_POST['id_order'];
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $jenis = $_POST['jenis'];
    $jumlah = $_POST['jumlah'];
    $harga_satu = $_POST['harga_satu'];
    $total = $_POST['total'];

    if (isset($_POST['submit'])) {
        # code...
        $query = "INSERT INTO user_order (id_order, nama, status, jenis, jumlah, harga_satu, total) VALUES (
            '$id_order',
            '$nama',
            '$status',
            '$jenis',
            '$jumlah',
            '$harga_satu',
            '$total')";
    
        if (mysqli_query($conn, $query)) {
            # code...
            #header("location:transact-success.php");
        } else {
            echo "Kesalahan " . mysqli_error($conn);
        }
    }
?>

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="style/Css.css" />
    <link rel="stylesheet" href="style/header.css">
    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/bootstrap.css">

    <?php require_once('header.php') ?>
    <div class="container-fluid" style="margin-top: 3.5rem;">
        <div class="card">
            <div class="card-header">
                <strong>Transaction</strong>
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
    </div>