<?php
session_start();
if (isset($_SESSION['id_toko'])) {
  header("Location: ./seller/beranda-mitra");
}else{
    header("Location: ./buyer/");
}
$status = isset($_GET['status']) ? $_GET['status'] : '';
