<?php
    include_once "connection.php";
    session_start();

    if ($_SESSION['status'] != 'login') {
        # code...
        echo "<script>console.log('Not logged in yet')</script>";
    } else {
        $id = $_SESSION['id'];
        $query = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
        $row = mysqli_fetch_array($query);
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
    <link rel="stylesheet" href="style/bootstrap.css">
    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
</head>
<body>
    <?php include_once('header.php'); ?>
    <div class="container">
        <div class="card" style="margin-top: 5.5rem;">
            <div class="card-header">
                <h5>User Profile</h5>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" name="id_user" value="<?= $row['id']; ?>">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Fullname</label>
                        <input type="text" class="form-control" name="fullname" value="<?= $row['fullname']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $row['username']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="<?= $row['password']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="datebirth" class="form-label">Datebirth</label>
                        <input type="date" class="form-control" name="datebirth" value="<?= $row['datebirth']; ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>