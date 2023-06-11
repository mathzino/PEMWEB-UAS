<?php
session_start();
include '../../conn.php';
if (!isset($_SESSION['id'])) {
  header("Location: ../login");
} elseif (isset($_SESSION['id_toko'])) {
  header("Location: ../beranda-mitra");
}
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>

<!DOCTYPE html>
<html>

<head lang="en" dir="ltr">
  <meta charset="utf-8">
  <title>Form Login</title>
  <link rel="stylesheet" type="text/css" href="style-formmitra.css">
</head>

<body>
  <h3 align="center">Buat Profil Dagangmu</h3>
  <div class="container">
    <form action="verif_daftar_toko.php" method="post" enctype="multipart/form-data">
      <center><img class="fotouser" src="user.png"></center>
      <center>
        <?php
        if ($status == 'err') {
          echo "<p style='color:red'>Gagal Mendaftarkan Toko</p>";
        } elseif ($status == 'err_upload') {
          echo "<p style='color:red'>Gagal Upload Foto</p>";
        }
        ?></center>
      <div class="form-group">
        <label for="image_profile" style="margin-bottom: .5rem;">Upload Foto Profil Toko</label>
        <input type="file" id="image_profile" name="image_profile" required>
      </div>

      <div class="form-group">
        <input type="text" id="namatoko" name="namatoko" placeholder="Nama Toko" required>
      </div>

      <div class="form-group">
        <input type="text" id="alamat" name="alamat" placeholder="Alamat" required>
      </div>

      <div class="form-group">
        <center><input type="submit" value="Simpan"></center>

      </div>
    </form>
  </div>
</body>

</html>