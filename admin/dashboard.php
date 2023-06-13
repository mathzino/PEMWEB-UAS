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
    <a href="./logout.php"><button type="submit" style="border:none;background-color:red;color:white;cursor:pointer;border-radius:.5rem;padding:.5rem 1rem;">Log Out</button></a>
    <?php
    if ($status == 'err') {
      echo "<p style='color:red'>Aksi Gagal</p>";
    } elseif ($status == 'success_acc') {
      echo "<p style='color:green'>Pendaftaran Toko Diterima !</p>";
    } elseif ($status == 'success_tolak') {
      echo "<p style='color:red'>Aktivitas Toko Terhenti Sementara !</p>";
    }
    ?>
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
          <td><div style="border-radius:.75rem;padding:0.5rem .25rem;text-align:center;font-weight:bold; <?= $data['status'] == 0 ?'color:rgb(202 138 4);background-color:rgb(254 240 138);':'color:rgb(22 163 74);background-color:rgb(187 247 208)'?>"><?= $data['status'] == 0 ? 'Menunggu' : 'Diterima' ?></div></td>
          <td>
            <?php if ($data['status'] == 1) : ?>
              <form action="verif_tolak_seller.php" method="POST">
                <input type="hidden" name="toko_id" value="<?= $data['toko_id'] ?>">
                <button type="submit" style="border: none;background-color: transparent;cursor: pointer;" onclick="return confirm('Hentikan Aktifitas Toko?');"><i class="fas fa-trash-alt"></i></>
              </form>
            <?php endif; ?>
            <?php if ($data['status'] == 0) : ?>
              <form action="verif_acc_seller.php" method="POST">
                <input type="hidden" name="toko_id" value="<?= $data['toko_id'] ?>">
                <button type="submit" style="border: none;background-color: transparent;cursor: pointer;" onclick="return confirm('Terima Pendaftaran ?')"><i class="fas fa-check-circle"></i></button>
              </form>
            <?php endif; ?>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  </div>
</body>

</html>