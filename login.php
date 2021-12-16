<?php
    include "connection.php";
    session_start();

    # For login
    $username = $_POST['username'];
    $password = $_POST['password'];

    #For Data
    $fullname = $_POST['fullname'];

    $query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      session_start();

      $data = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $username;
      $_SESSION['fullname'] = $fullname;
      $_SESSION['status'] = 'login';
      header("location:index.php");
    } else {
      echo "<script>alert('error')</script>";
    }
?>