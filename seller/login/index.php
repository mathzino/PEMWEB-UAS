<?php
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>

<!DOCTYPE html>
<html>

<head lang="en" dir="ltr">
  <meta charset="utf-8">
  <title>Form Login</title>
  <link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>

<body>

  <div class="container">
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

      <div class="pass-link" style="text-align: center;display: flex;justify-content: center;">
        <a href="#">
          Lupa password?
        </a>
      </div>

      <div class="form-group">
        <input type="submit" value="Login">

        <div class="signup-link" style="text-align: center;">
          Belum punya akun?<a href="../signup/"> daftar disini</a>
        </div>

      </div>
    </form>
  </div>
</body>

</html>