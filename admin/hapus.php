<?php

    include_once "../connection.php";

    $id = $_GET['id_order'];

    $query = "DELETE FROM user_order WHERE id_order='$id'";
    
    
    if(mysqli_query($conn, $query)) {
        header("location:index_admin.php");
    } else {
        echo "<script>console.log('Kesalahan ')</script>" . mysqli_error($conn);
    }

