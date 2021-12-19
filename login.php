<?php
    include "connection.php";
    session_start();

    # For login
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      session_start();

      $data = mysqli_fetch_assoc($result);
      if ($data['level'] == '1') {
        # code...
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header("location:index.php");
      } else if ($data['level'] == '2') {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header("location: admin/index_admin.php");
      }
    } else {
      echo "<script>alert('error')</script>";
    }
?>