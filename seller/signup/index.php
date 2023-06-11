<?php
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>
<!DOCTYPE html>
<html>

<head lang="en" dir="ltr">
  <meta charset="utf-8">
  <title>Form Login</title>
  <link rel="stylesheet" type="text/css" href="style-signup.css">
</head>

<body>

  <div class="container">
    <form action="verif_signup.php" method="post">
      <?php
      if ($status == 'err') {
        echo "<p style='color:red'>Gagal Daftar</p>";
      } elseif ($status == 'err_pass') {
        echo "<p style='color:red'>Password Tidak Sama</p>";
      } elseif ($status == 'email_exists') {
        echo "<p style='color:red'>Email sudah terdaftar</p>";
      }
      ?>
      <div class="form-group">
        <input type="text" id="username" name="username" placeholder="Username" required>
      </div>

      <div class="form-group">
        <input type="text" id="name" name="name" placeholder="Name" required>
      </div>

      <div class="form-group">
        <input type="text" id="email" name="email" placeholder="Email" required>
      </div>

      <div class="form-group">
        <input type="password" id="password" name="password" placeholder="Password" required>
      </div>

      <div class="form-group">
        <input type="password" id="confirmpass" name="confirmpass" placeholder="Confirm Password" required>
      </div>

      <div class="form-group">
        <hr><input type="submit" value="Sign Up"></hr>

        <div class="loginlink" style="display: flex;justify-content: center;">
          Sudah punya akun?<a href="../login/"> masuk!</a>
        </div>


      </div>
    </form>
  </div>
</body>

</html>