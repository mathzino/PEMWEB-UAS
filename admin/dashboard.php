<?php
session_start();
include '../conn.php';
if (isset($_SESSION['id_toko'])) {
  header("Location: ../seller/beranda-mitra");
} elseif (isset($_SESSION['id'])) {
  header("Location: ../seller/beranda-mitra");
} elseif (!isset($_SESSION['id_admin'])) {
  header("Location: ./index.php");
}
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>

<!DOCTYPE html>
<html>

<head>
  <title>Halaman Admin</title>
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
  <div class="admin-container">
    <h1>Halaman Admin</h1>
    <a href="./logout.php"><button>Log Out</button></a>
    <table>
      <tr>
        <th>Nama Toko</th>
        <th>Owner</th>
        <th>Jumlah Pendapatan</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
      <?php
      $query = "SELECT toko.name, toko.toko_id,toko.status, toko.pendapatan_total, seller.id_seller, seller.name AS seller_name FROM toko JOIN seller ON toko.owner = seller.id_seller";
      $result = mysqli_query(connection(), $query);
      ?>
      <?php while ($data = mysqli_fetch_array($result)) : ?>
        <tr>
          <td><?= $data['name'] ?></td>
          <td><?= $data['seller_name'] ?></td>
          <td>Rp.<?= $data['pendapatan_total'] ?></td>
          <td><?= $data['status'] == 0 ? 'Belum ACC' : 'Ter ACC' ?></td>
          <td>
            <a href="#" class="edit-btn"><i class="fas fa-edit"></i></a>
            <a href="#" class="delete-btn"><i class="fas fa-trash-alt"></i></a>
            <a href="#" class="approve-btn"><i class="fas fa-check-circle"></i></a>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  </div>
</body>

</html>