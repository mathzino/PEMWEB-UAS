<?php
session_start();
include '../../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = mysqli_real_escape_string(connection(), $_POST['product_id']);
    $namaproduk = mysqli_real_escape_string(connection(), $_POST['namaproduk']);
    $stok = mysqli_real_escape_string(connection(), $_POST['stok']);
    $harga = mysqli_real_escape_string(connection(), $_POST['harga']);
    $stok = mysqli_real_escape_string(connection(), $_POST['stok']);
    $uom = mysqli_real_escape_string(connection(), $_POST['uom']);
    $kategori = mysqli_real_escape_string(connection(), $_POST['kategori']);
    $deskripsi = mysqli_real_escape_string(connection(), $_POST['deskripsi']);
    $image_product_old = mysqli_real_escape_string(connection(), $_POST['image_product_old']);
    $image_product = $_FILES['image_product'];

    $directory_upload = "../../assets/produk/";


    if (!empty($image_product['name'])) {
        if (file_exists($directory_upload . $image_product_old)) {
            unlink($directory_upload . $image_product_old);
        }
        $extension = explode('/', $image_product['type'])[1];
        $nama_file = $namaproduk . '_' . microtime() . '.' . $extension;
        $tmp = $image_product['tmp_name'];
        $img_dir = $directory_upload . $nama_file;
        $upload_file = move_uploaded_file($tmp, $img_dir);

        if (!$upload_file) echo "<script>alert('gagal menyimpan gambar produk!')</script>";

        $query = "UPDATE product SET name = '$namaproduk', price = '$harga', qt = '$stok', product_uom = '$uom', product_category = '$kategori', image = '$nama_file', description = '$deskripsi' WHERE product.product_id = $product_id;";
        $result = mysqli_query(connection(), $query);
        if ($result) {
            $status = 'ok';
            header('Location: index.php?status=' . $status);
        } else {
            $status = 'err';
            header('Location: index.php?status=' . $status);
        }
    } else {
        $query = "UPDATE product SET name = '$namaproduk', price = '$harga', qt = '$stok', product_uom = '$uom', product_category = '$kategori', description = '$deskripsi' WHERE product.product_id = $product_id;";

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
