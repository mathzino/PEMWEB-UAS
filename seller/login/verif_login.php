<?php
session_start();
include '../../conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string(connection(), $_POST['email']);
    $password = mysqli_real_escape_string(connection(), $_POST['password']);

    $query  = "SELECT * FROM seller WHERE email = '$email'";
    $result = mysqli_query(connection(), $query);
    if (mysqli_num_rows($result) == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['id'] = $row['id_seller'];
                $_SESSION['username'] = $row['username'];

                $query_toko  = "SELECT * FROM toko WHERE owner = '$row[id_seller]'";
                $result_toko = mysqli_query(connection(), $query_toko);
                if (mysqli_num_rows($result_toko) == 1) {
                    while ($row_toko = mysqli_fetch_assoc($result_toko)) {
                        $_SESSION['id_toko'] = $row_toko['toko_id'];
                    }
                    header("Location:../beranda-mitra");
                } else {
                    header("Location:../formulir-mitra");
                }
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
