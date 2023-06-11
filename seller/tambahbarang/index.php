<?php
session_start();
include '../../conn.php';
if (!isset($_SESSION['id_toko'])) {
  header("Location: ../formulir-mitra");
} elseif (!isset($_SESSION['id'])) {
  header("Location: ../login");
}
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
    <form action="verif_tambah_barang.php" method="get" enctype="multipart/form-data">
      <center><img class="gambar" width="50" height="50" src="packaging.png"></center>

      <div class="form-group">
        <label for="image_produk" style="margin-bottom: .5rem;">Upload Gambar Produk</label>
        <input type="file" id="image_produk" name="image_produk" required>
      </div>

      <div class="form-group">
        <input type="text" id="namaproduk" name="namatoko" placeholder="Nama Produk" required>
      </div>

      <div class="form-group">
        <input type="number" id="" name="jumlah" placeholder="Jumlah (Stok)" required>
      </div>

      <div class="form-group1" style="display: flex;align-items: center;gap: 1rem;">
        <input type="text" id="harga" name="harga" placeholder="Harga" required>
        <span>/</span>
        <select style="width: 8rem; padding: 15px;border-radius: 20px;border: 1px solid #ccc;">
          <option value="">Pilih</option>
          <option value="kg">Kg</option>
          <option value="ons">ons</option>
          <option value="pcs">pcs</option>
        </select>
      </div>

      <h5>Tambah Produk</h5>


      <div class="form-group">
        <select type="text" name="kategori" id="kategori" placeholder="Pilih Kategori">
          <option value="">Pilih Kategori</option>
          <?php
          //proses menampilkan data dari database:
          //siapkan query SQL
          $query = "SELECT * FROM category";
          $result = mysqli_query(connection(), $query);
          ?>
          <?php while ($data_kategori = mysqli_fetch_array($result)) : ?>
            <option value="Sayur"><?= $data_kategori['category_name'] ?></option>
          <?php endwhile; ?>
          <option value="Perlengkapan">lainnya</option>
        </select>

      </div>

      <div class="form-group">
        <center><input type="submit" value="Tambah Produk"></center>

      </div>
    </form>
  </div>
</body>

</html>