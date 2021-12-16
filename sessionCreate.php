<?php
    session_start();

    $status = $_POST['status'];
    if ($_COOKIE[$status] = null) {
        $_SESSION['status'] = 'not';
    } else {
        $_SESSION['status'] = $_COOKIE[$status];
    }
?>