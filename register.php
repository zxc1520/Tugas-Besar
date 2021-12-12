<?php

    require_once('connection.php');

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $datebirth = $_POST['datebirth'];

    if (!empty(trim($fullname)) && !empty(trim($username)) && !empty(trim($password)) && !empty(trim($datebirth))) {
        # code...
        $query = "INSERT INTO user (fullname, username, password, datebirth) VALUES (
            '$fullname',
            '$username',
            '$password',
            '$datebirth'";
        mysqli_query($conn, $query);
    } else {
        $validate = "Data form tidak boleh ada yang kosong !";
        #echo '<script>alert("Data tidak boleh kosong");</script>';
    }