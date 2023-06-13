<?php
session_start();
if (isset($_SESSION['id_toko'])) {
  header("Location: ../beranda-mitra");
}
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>

<!DOCTYPE html>
<html>

<head lang="en" dir="ltr">
  <meta charset="utf-8">
  <title>Form Login</title>
  <link rel="stylesheet" type="text/css" href="stylelogin.css">
  <style>
    * {
      box-sizing: border-box;
    }

    html,
    body {
      margin: 0;
    }

    p,
    h1 {
      margin: 0;
    }

    input:focus {
      outline: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <center>
      <h1 style="margin-bottom: 2rem;">Login Mitra</h1>
    </center>
    <form action="./verif_login.php" method="post">
      <?php
      if ($status == 'invalid') {
        echo "<p style='color:red'>Email atau Password Salah</p>";
      } elseif ($status == 'signup') {
        echo "<p style='color:green'>Berhasil Sign Up, Silahkan Login</p>";
      } elseif ($status == 'no_email') {
        echo "<p style='color:red'>Email belum terdaftar</p>";
      }
      ?>
      <div class="form-group">
        <input type="text" id="email" name="email" placeholder="Email" required>
      </div>

      <div class="form-group">
        <input type="password" id="password" name="password" placeholder="Password" required>
      </div>

      <div class="form-group">
        <input type="submit" value="Login">

        <div style="text-align: center;">
          Belum punya akun?<a href="../signup/"> daftar disini</a>
        </div>

      </div>
    </form>
  </div>
</body>

</html>