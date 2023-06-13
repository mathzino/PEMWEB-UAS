<?php
session_start();

include "../../conn.php";
include "../lib/generateRandomId.php";
include "../lib/generateRandomCode.php";


if (isset($_POST)) {
    if (!isset($_POST['alamat']) || !isset($_POST['contact']) || !isset($_POST['name'])) {

        header("Location : index.php");
    }

    $toko_id = $_SESSION['transactionTemp']->toko_id;
    $alamat = $_POST['alamat'];
    $contact = $_POST['contact'];
    $name = $_POST['name'];
    $id_transaction = generateRandomId();
    $insertTransactionQuery = "insert into transaction  VALUES ( '$id_transaction' , '$name' , '$alamat' ,  '$contact' , '0' , '$toko_id' , CURRENT_DATE , 'Cash On Delivery') ";
    $transactionResult = mysqli_query(connection(), $insertTransactionQuery);
    $random_code = generateRandomCode();
    $id_code = generateRandomId();
    $insertCodeQuery = "insert into code values ('$id_code','$random_code','$id_transaction','0')";
    $codeResult = mysqli_query(connection(), $insertCodeQuery);

    if ($transactionResult) {

        $id_transaction_detail = generateRandomId();
        $insertTransactionDetailQuery = " INSERT into transaction_detail (id_transaction_detail,id_product , qt , id_transaction) VALUES ('$id_transaction_detail' ," . $_SESSION['transactionTemp']->id_product . " , " . $_SESSION['transactionTemp']->qt . " , " . $id_transaction . " ) ";
        $transactionDetailResult = mysqli_query(connection(), $insertTransactionDetailQuery);


        if (!isset($_SESSION['notif']) || !is_array($_SESSION['notif'])) {
            // Add a new integer value to the 'notif' array
            $_SESSION['notif'] = [];
            // array_push($_SESSION['notif'], $id_transaction);
        }
        // Create a new 'notif' session variable with an array containing an integer value
        $_SESSION['notif'][] = $id_transaction;

        unset($_SESSION['transactionTemp']);

        header("Location:../index.php");
    }


}



?>