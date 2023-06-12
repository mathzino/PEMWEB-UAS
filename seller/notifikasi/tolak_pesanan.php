<?php

include '../../conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_transaction = mysqli_real_escape_string(connection(), $_POST['id_transaksi']);

    $query  = "UPDATE transaction SET status = 3 WHERE transaction.id_transaction = '$id_transaction'";
    $result = mysqli_query(connection(), $query);
    if ($result) {
        $status = 'ditolak';
    } else {
        $status = 'err_konfirmasi';
    }
    header('Location: index.php?status=' . $status);
}
