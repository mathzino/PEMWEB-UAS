<?php
session_start();
include '../conn.php';
if (isset($_SESSION['id_toko'])) {
  header("Location: ../seller/beranda-mitra");
} elseif (isset($_SESSION['id'])) {
  header("Location: ../seller/beranda-mitra");
}
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login Admin</title>
  <link rel="stylesheet" type="text/css" href="admin.css">
</head>

<body>
  <div class="login-container">
    <h1>Login Admin</h1>
    <form action="verif_login_admin.php" method="POST">
      <?php
      if ($status == 'invalid') {
        echo "<p style='color:red'>Password Salah</p>";
      } elseif ($status == 'no_email') {
        echo "<p style='color:red'>Anda bukan Admin</p>";
      }
      ?>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Login">
    </form>
  </div>
</body>

</html>