<?php
session_start();
include '../../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_toko = $_SESSION['id_toko'];
    $namaproduk = mysqli_real_escape_string(connection(), $_POST['namaproduk']);
    $harga = mysqli_real_escape_string(connection(), $_POST['harga']);
    $jumlah = mysqli_real_escape_string(connection(), $_POST['jumlah']);
    $kategori = mysqli_real_escape_string(connection(), $_POST['kategori']);
    $uom = mysqli_real_escape_string(connection(), $_POST['uom']);
    $deskripsi = mysqli_real_escape_string(connection(), $_POST['deskripsi']);
    $image_produk = $_FILES['image_produk'];

    $extension = explode('/', $image_produk['type'])[1];
    $nama_file = $namaproduk . '_' . microtime() . '.' . $extension;
    $tmp = $image_produk['tmp_name'];

    $directory_upload = "../../assets/produk/";

    $upload_file = move_uploaded_file($tmp, $directory_upload . $nama_file);
    if (!$upload_file) {
        header('Location: index.php?status=err_upload');
    } else {
        // query SQL
        $query = "INSERT INTO product VALUES(null,'$id_toko','$namaproduk','$harga','$jumlah', '$uom', '$kategori', '$nama_file','$deskripsi')";

        // eksekusi query
        $result = mysqli_query(connection(), $query);
        if ($result) {
            $inserted_id = mysqli_insert_id(connection());
            header('Location: ../beranda-mitra/?status=tambah_produk');
        } else {
            $status = 'err';
            header('Location: index.php?status=' . $status);
        }
    }
}
