<?php
session_start();
$_SESSION = array();

if($_SERVER["REQUEST_METHOD"] === "GET"){
    if($_GET["procedure"] == "order"){
     header("location: ../html/order.html");
     exit;

    }else if($_GET["procedure"] == "cancel"){
        header("location: ../html/cancel.html");
        exit;
    }else{
        header("location: indexcontroller.php");
        exit;
    }
}




?>