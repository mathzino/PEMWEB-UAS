<?php
include '../../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string(connection(), $_POST['username']);
    $name = mysqli_real_escape_string(connection(), $_POST['name']);
    $email = mysqli_real_escape_string(connection(), $_POST['email']);
    $password = mysqli_real_escape_string(connection(), $_POST['password']);
    $confirmpass = mysqli_real_escape_string(connection(), $_POST['confirmpass']);

    $sql = "SELECT * FROM seller WHERE email = '$email'";
    $execute = mysqli_query(connection(), $sql);
    if (mysqli_num_rows($execute) > 0) {
        $status = 'email_exists';
        header('Location: index.php?status=' . $status);
    } elseif ($password != $confirmpass) {
        $status = 'err_pass';
        header('Location: index.php?status=' . $status);
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        //query SQL
        $query = "INSERT INTO seller VALUES('','$username','$name','$email','$password')";

        //eksekusi query
        $result = mysqli_query(connection(), $query);
        if ($result) {
            header('Location: ../login/?status=signup');
        } else {
            $status = 'err';
            header('Location: index.php?status=' . $status);
        }
    }
}
