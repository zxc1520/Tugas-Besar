<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_burgershot";

    $conn = mysqli_connect($hostname, $username, $password, $database);

    if ($conn) {
        # code...
        echo "<script>console.log('berhasil konek');</script>";
    } else {
        echo "<script>console.log('kesalahan')</script> " . mysqli_connect_error();
    }