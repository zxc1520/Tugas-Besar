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
    <title>Edit</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Status
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <input type="text" name="id_order" value="">
                    <div class="mb-3">
                        <label for="name">Nama Pembeli</label>
                        <input type="text" class="form-control" name="nama" />
                    </div>
                    <div class="mb-3">
                        <label for="status">Status Pembeli</label>
                        <input type="radio" class="form-check-input" name="status" value="member" />Member
                        <input type="radio" class="form-check-input" name="status" value="non_member" />Non Member
                    </div>
                    <div class="mb-3">
                    <label for="jenis">Jenis Item</label>
                    <select class="form-select" name="jenis" id="jenis" onchange="harga()">
                        <option value="reguler">Reguler</option>
                        <option value="heartstopper" selected>Heart Stopper</option>
                        <option value="milkshake">Milkshake</option>
                        <option value="cola">Cola</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga_satu" class="form-label">Harga Satuan</label>
                        <input type="number" name="harga_satu" class="form-control" readonly />
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah Pesanan</label>
                        <input type="number" class="form-control" name="jumlah" />
                    </div>
                    <div class="mb-3">
                        <label for="total" class="form-label">Total Harga</label>
                        <input type="number" value="" class="form-control" name="total" size="9" readonly />
                    </div>
                    <div class="mb-3">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>