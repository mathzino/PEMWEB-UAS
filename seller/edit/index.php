<?php
session_start();
include '../../conn.php';
if (!isset($_SESSION['id_toko'])) {
  header("Location: ../formulir-mitra");
} elseif (!isset($_SESSION['id'])) {
  header("Location: ../login");
}
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>
<!DOCTYPE html>
<html>

<head lang="en" dir="ltr">
  <meta charset="utf-8">
  <title>Tambah Produk</title>
  <link rel="stylesheet" type="text/css" href="style5.css">
  <style>
    * {
      box-sizing: border-box;
    }

    html,
    body {
      margin: 0;
      padding: 0;
    }

    p {
      margin: 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <div style="display: flex;gap: 1rem;justify-content: flex-start;align-items: center;">
      <a href="../beranda-mitra/"><img src="../assets/svg/back-arrow.svg" alt="back"></a>
      <p style="font-size: 1.25rem;font-weight: bold;">Tambah Produk</p>
    </div>
    <form action="verif_tambah_barang.php" method="POST" enctype="multipart/form-data">
      <center><img class="gambar" width="50" height="50" src="packaging.png"></center>
      <?php
      if ($status == 'err') {
        echo "<p style='color:red'>Gagal Menambahkan Barang</p>";
      } elseif ($status == 'err_upload') {
        echo "<p style='color:red'>Gagal Upload Foto</p>";
      }
      ?>
      <div class="form-group">
        <label for="image_produk" style="margin: .5rem;">Upload Gambar Produk</label>
        <input type="file" id="image_produk" name="image_produk" required>
      </div>

      <div class="form-group">
        <input type="text" id="namaproduk" name="namaproduk" placeholder="Nama Produk" required>
      </div>

      <div class="form-group">
        <input type="number" id="jumlah" name="jumlah" placeholder="Jumlah (Stok)" required>
      </div>

      <div class="form-group1" style="display: flex;align-items: center;gap: 1rem;">
        <input type="text" id="harga" name="harga" placeholder="Harga" required>
        <span>/</span>
        <select style="width: 8rem; padding: 15px;border-radius: 20px;border: 1px solid #ccc;" id="uom" name="uom" required>
          <option value="">Pilih</option>
          <?php
          $query_uom = "SELECT * FROM product_uom";
          $result_uom = mysqli_query(connection(), $query_uom);
          ?>
          <?php while ($data_uom = mysqli_fetch_array($result_uom)) : ?>
            <option value="<?= $data_uom['id_product_uom'] ?>"><?= $data_uom['uom'] ?></option>
          <?php endwhile; ?>
        </select>
      </div>

      <div class="form-group" style="margin-top: 1rem;">
        <select type="text" name="kategori" id="kategori" placeholder="Pilih Kategori" style="width: 100%;">
          <option value="">Pilih Kategori</option>
          <?php
          $query = "SELECT * FROM category";
          $result = mysqli_query(connection(), $query);
          ?>
          <?php while ($data_kategori = mysqli_fetch_array($result)) : ?>
            <option value="<?= $data_kategori['id_category'] ?>"><?= $data_kategori['category_name'] ?></option>
          <?php endwhile; ?>
          <option value="Perlengkapan">lainnya</option>
        </select>
      </div>

      <!-- text area about product description -->
      <div class="form-group">
        <textarea name="deskripsi" id="deskripsi" placeholder="Deskripsi Produk" style="padding: 15px;border-radius: 20px;border: 1px solid #ccc;width: 100%;"></textarea>
      </div>

      <div class="form-group">
        <center><input type="submit" value="Tambah Produk"></center>

      </div>
    </form>
  </div>
</body>

</html>