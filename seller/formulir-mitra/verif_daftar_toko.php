<?php
session_start();
include '../../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_seller = $_SESSION['id'];
    $namatoko = mysqli_real_escape_string(connection(), $_POST['namatoko']);
    $alamat = mysqli_real_escape_string(connection(), $_POST['alamat']);
    $img_profile = $_FILES['image_profile'];

    $extension = explode('/', $img_profile['type'])[1];
    $nama_file = $namatoko . '_' . microtime() . '.' . $extension;
    $tmp = $img_profile['tmp_name'];

    $directory_upload = "../assets/";

    $upload_file = move_uploaded_file($tmp, $directory_upload . $nama_file);
    if (!$upload_file) {
        header('Location: index.php?status=err_upload');
    } else {
        // query SQL
        $query = "INSERT INTO toko VALUES(null,'$namatoko','$alamat','$id_seller','$nama_file',0,0)";

        // eksekusi query
        $result = mysqli_query(connection(), $query);
        if ($result) {
            $query_toko  = "SELECT * FROM toko WHERE owner = '$id_seller'";
            $result_toko = mysqli_query(connection(), $query_toko);
            $row_toko = mysqli_fetch_assoc($result_toko);
            $_SESSION['id_toko'] = $row_toko['toko_id'];
            header('Location: ../beranda-mitra/?status=daftar_toko');
        } else {
            $status = 'err';
            header('Location: index.php?status=' . $status);
        }
    }
}
