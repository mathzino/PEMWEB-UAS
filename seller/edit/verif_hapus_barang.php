<?php
session_start();
include '../../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product_id = mysqli_real_escape_string(connection(), $_GET['product_id']);
    $image_product_old = mysqli_real_escape_string(connection(), $_GET['image_product_old']);

    if (empty($product_id)) {
        header('Location: ../beranda-mitra');
        exit();
    }

    $directory_upload = "../../assets/produk/";

    if (file_exists($directory_upload . $image_product_old)) {
        unlink($directory_upload . $image_product_old);
    }

    $query = "DELETE FROM product WHERE product.product_id = '$product_id'";
    $result = mysqli_query(connection(), $query);
    if ($result) {
        $status = 'ok';
        header('Location: ../beranda-mitra/?status=' . $status);
    } else {
        $status = 'err';
        header('Location: index.php?status=' . $status);
    }
}
