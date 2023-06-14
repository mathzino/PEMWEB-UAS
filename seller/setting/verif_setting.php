<?php
session_start();
include '../../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_toko = $_SESSION['id_toko'];
    $namatoko = mysqli_real_escape_string(connection(), $_POST['namatoko']);
    $alamat = mysqli_real_escape_string(connection(), $_POST['alamat']);
    $image_profile_old = mysqli_real_escape_string(connection(), $_POST['image_profile_old']);
    $image_profile = $_FILES['image_profile_new'];

    $directory_upload = "../assets/";

    if (!empty($image_profile['name'])) {
        if (file_exists($directory_upload . $image_profile_old)) {
            unlink($directory_upload . $image_profile_old);
        }
        $extension = explode('/', $image_profile['type'])[1];
        $nama_file = $namatoko . '_' . microtime() . '.' . $extension;
        $tmp = $image_profile['tmp_name'];
        $img_dir = $directory_upload . $nama_file;
        $upload_file = move_uploaded_file($tmp, $img_dir);

        if (!$upload_file) echo "<script>alert('gagal menyimpan gambar cover!')</script>";

        $query = "UPDATE toko SET name = '$namatoko', alamat = '$alamat', image_profile = '$nama_file' WHERE toko.toko_id = $id_toko;";
        $result = mysqli_query(connection(), $query);
        if ($result) {
            $status = 'ok';
            header('Location: index.php?status=' . $status);
        } else {
            $status = 'err';
            header('Location: index.php?status=' . $status);
        }
    } else {
        $query = "UPDATE toko SET name = '$namatoko', alamat = '$alamat' WHERE toko.toko_id = $id_toko;";

        $result = mysqli_query(connection(), $query);
        if ($result) {
            $status = 'ok';
            header('Location: index.php?status=' . $status);
        } else {
            $status = 'err';
            header('Location: index.php?status=' . $status);
        }
    }
}
