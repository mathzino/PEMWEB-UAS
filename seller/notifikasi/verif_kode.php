<?php
session_start();
include '../../conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_transaction = mysqli_real_escape_string(connection(), $_POST['id_transaksi']);
    $kode = mysqli_real_escape_string(connection(), $_POST['kode']);
    $total = mysqli_real_escape_string(connection(), $_POST['total']);

    // MENDAPATKAN KODE DARI TRANSAKSI
    $query_kode = "SELECT * FROM code WHERE id_transaction = '$id_transaction'";
    $result_kode = mysqli_query(connection(), $query_kode);
    $row_kode = mysqli_fetch_assoc($result_kode);
    if ($kode != $row_kode['code']) {
        $status = 'err_kode';
        header('Location: index.php?status=' . $status);
        exit();
    }
    // MENDAPATKAN KODE DARI TRANSAKSI

    // SET KODE MENJADI CLAIMED
    $query_claim = "UPDATE code SET claim = 1 WHERE id_transaction = '$id_transaction'";
    $result_claim = mysqli_query(connection(), $query_claim);
    if (!$result_claim) {
        $status = 'err_konfirmasi';
        header('Location: index.php?status=' . $status);
        exit();
    }
    // SET KODE MENJADI CLAIMED

    // MENDAPATKAN PENDAPATAN TOKO
    $query_pendapatan_sekarang = "SELECT pendapatan_total FROM toko WHERE toko_id = '$_SESSION[id_toko]'";
    $result_pendapatan_sekarang = mysqli_query(connection(), $query_pendapatan_sekarang);
    $row_pendapatan_sekarang = mysqli_fetch_assoc($result_pendapatan_sekarang);
    $pendapatan_sekarang = $row_pendapatan_sekarang['pendapatan_total'];
    // MENDAPATKAN PENDAPATAN TOKO

    // UPDATE PENDAPATAN TOKO
    $query_update_pendapatan = "UPDATE toko SET pendapatan_total = '$pendapatan_sekarang' + '$total' WHERE toko_id = '$_SESSION[id_toko]'";
    $result_update_pendapatan = mysqli_query(connection(), $query_update_pendapatan);
    if (!$result_update_pendapatan) {
        $status = 'err_konfirmasi';
        header('Location: index.php?status=' . $status);
        exit();
    }
    // UPDATE PENDAPATAN TOKO

    // UPDATE STATUS TRANSAKSI
    $query  = "UPDATE transaction SET status = 2 WHERE transaction.id_transaction = '$id_transaction'";
    $result = mysqli_query(connection(), $query);
    if ($result) {
        $status = 'selesai';
    } else {
        $status = 'err_konfirmasi';
    }
    // UPDATE STATUS TRANSAKSI
    header('Location: index.php?status=' . $status);
}
