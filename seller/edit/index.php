<?php
session_start();
include '../../conn.php';
if (!isset($_SESSION['id_toko'])) {
  header("Location: ../formulir-mitra");
} elseif (!isset($_SESSION['id'])) {
  header("Location: ../login");
}
$status = isset($_GET['status']) ? $_GET['status'] : '';
if ($_GET['product_id']) {
  $product_id = $_GET['product_id'];
  $query = "SELECT * FROM product JOIN product_uom ON product.product_uom = product_uom.id_product_uom WHERE product_id = '$product_id'";
  $result = mysqli_query(connection(), $query);
  $data = mysqli_fetch_array($result);
} else {
  header("Location: ../beranda-mitra");
}
?>
<!DOCTYPE html>
<html>

<head lang="en" dir="ltr">
  <meta charset="utf-8">
  <title>Edit Produk</title>
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
      <p style="font-size: 1.25rem;font-weight: bold;">Edit Produk</p>
    </div>
    <form action="verif_edit_barang.php" method="POST" enctype="multipart/form-data">
      <center><img src="../../assets/produk/<?= $data['image'] ?>" style="border-radius: 1rem;height: 200px;width: auto;object-fit: cover;"></center>
      <?php
      if ($status == 'err') {
        echo "<p style='color:red'>Gagal Menambahkan Barang</p>";
      } elseif ($status == 'err_upload') {
        echo "<p style='color:red'>Gagal Upload Foto</p>";
      }
      ?>
      <input type="hidden" name="product_id" value="<?= $data['product_id'] ?>">
      <input type="hidden" name="image_product_old" value="<?= $data['image'] ?>">
      <div class="form-group">
        <label for="image_produk" style="margin: .5rem;">Upload Gambar Produk</label>
        <input type="file" id="image_produk" name="image_product">
      </div>

      <div class="form-group">
        <input type="text" id="namaproduk" name="namaproduk" placeholder="Nama Produk" value="<?= $data['name'] ?>" required>
      </div>

      <div class="form-group">
        <input type="number" id="stok" name="stok" placeholder="Jumlah (Stok)" value="<?= $data['qt'] ?>" required>
      </div>

      <div class="form-group1" style="display: flex;align-items: center;gap: 1rem;">
        <input type="text" id="harga" name="harga" placeholder="Harga" value="<?= $data['price'] ?>" required>
        <span>/</span>
        <select style="width: 8rem; padding: 15px;border-radius: 20px;border: 1px solid #ccc;" id="uom" name="uom" required>
          <option value="">Pilih</option>
          <?php
          $query_uom = "SELECT * FROM product_uom";
          $result_uom = mysqli_query(connection(), $query_uom);
          ?>
          <?php while ($data_uom = mysqli_fetch_array($result_uom)) : ?>
            <option value="<?= $data_uom['id_product_uom'] ?>" <?= $data['product_uom'] == $data_uom['id_product_uom'] ? 'selected' : '' ?>><?= $data_uom['uom'] ?></option>
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
            <option value="<?= $data_kategori['id_category'] ?>" <?= $data['product_category'] == $data_kategori['id_category'] ? 'selected' : ''; ?>><?= $data_kategori['category_name'] ?></option>
          <?php endwhile; ?>
          <option value="Perlengkapan">lainnya</option>
        </select>
      </div>

      <!-- text area about product description -->
      <div class="form-group">
        <textarea name="deskripsi" id="deskripsi" placeholder="Deskripsi Produk" style="padding: 15px;border-radius: 20px;border: 1px solid #ccc;width: 100%;font-family: sans-serif;"><?= $data['description']; ?></textarea>
      </div>

      <div class="form-group">
        <center><input type="submit" value="Tambah Produk"></center>

      </div>
    </form>
  </div>
</body>

</html>