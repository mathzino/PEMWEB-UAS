<?php
session_start();
include '../conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string(connection(), $_POST['email']);
    $password = mysqli_real_escape_string(connection(), $_POST['password']);

    $query  = "SELECT * FROM admin WHERE email = '$email'";
    $result = mysqli_query(connection(), $query);
    if (mysqli_num_rows($result) == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['id_admin'] = $row['id_admin'];
                header("Location: ./dashboard.php");
            } else {
                $status = "invalid";
                header("Location: index.php?status=" . $status);
            }
        }
    } else {
        $status = "no_email";
        header("Location: index.php?status=" . $status);
    }
}
