<?php

include "../../conn.php";

session_start();

if(isset($_POST)){
    if( !isset($_POST['alamat'])|| !isset($_POST['contact'])|| !isset($_POST['name']) ){

        header("Location : index.php");
    }

    $insertTransactionQuery = "insert into transaction (alamat,contact,delivery_type,name,status,toko_id,date) VALUES ( '" . $_POST['alamat'] . "' ,   '" . $_POST['contact'] . "' , '" . "Cash On Delivery" . "' , '" . $_POST['name'] . "' , '".  0  . "' , '" .  $_SESSION['transactionTemp']->toko_id . "' , " . "   CURRENT_DATE " . " ); ";
    echo $insertTransactionQuery;
    $transactionResult = mysqli_query(connection(), $insertTransactionQuery);

    if($transactionResult){
    $inserted_id_transaction = connection()->insert_id || uniqid(mt_rand(1000,9000),true);

    echo $inserted_id_transaction;
    $insertTransactionDetailQuery = " INSERT into transaction_detail (id_product , qt , id_transaction) VALUES (" . $_SESSION['transactionTemp']->id_product . " , " .  $_SESSION['transactionTemp']->qt . " , " . $inserted_id_transaction . " ) ";
    $transactionDetailResult = mysqli_query(connection(), $insertTransactionDetailQuery);
    $inserted_id_transaction_detail = mysqli_insert_id(connection());

    
    if (!isset($_SESSION['notif']) || !is_array($_SESSION['notif'])) {
        // Add a new integer value to the 'notif' array
        $_SESSION['notif'][] = [] ;
        array_push($_SESSION['notif'], $inserted_id_transaction);
    } else {
        // Create a new 'notif' session variable with an array containing an integer value
        array_push($_SESSION['notif'], $inserted_id_transaction);
    }

    unset($_SESSION['transactionTemp']);
   
    header("Location : index.php");
}


}



?>


