<?php

include "../../conn.php";

session_start();

if(isset($_POST)){
  
    unset($_SESSION['transactionTemp']);
   
    header("Location:../index.php");
}





?>


