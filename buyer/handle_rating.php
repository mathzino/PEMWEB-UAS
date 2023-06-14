<?php
session_start();
include '../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_toko = $_SESSION['id_toko'];
    $id_transaction = $_POST['id_transaction'];
    $id_produk = $_POST['id_produk'];
    $rating = $_POST['rating'] > 5 ? 5 : $_POST['rating'];
    $rating = $rating < 1 ? 1 : $rating;

    $query = "INSERT INTO star VALUES(null,'$id_produk','$rating')";

    $result = mysqli_query(connection(), $query);
    if ($result) {
        header('Location: ./notify.php?status=rating');
    } else {
        $status = 'err';
        header('Location: ratingPage.php?status=' . $status);
    }
}