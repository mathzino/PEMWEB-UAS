<?php
session_start();
include '../conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $toko_id = mysqli_real_escape_string(connection(), $_POST['toko_id']);

    $query  = "UPDATE toko SET status = 1 WHERE toko.toko_id = '$toko_id'";
    $result = mysqli_query(connection(), $query);
    if ($result) {
        $status = "success_acc";
        header("Location: ./dashboard.php?status=" . $status);
    } else {
        $status = "err";
        header("Location: ./dashboard.php?status=" . $status);
    }
}
