<?php

 require "menu.php";
 session_start();

 $menus = $_SESSION["menus"];
 $order_flg = false;
 $ordered_menus = array();

 foreach($menus as $menu){
     if($_POST[$menu->getId()] !== "") {
         $order_flg = true;
         $menu->setAmount(intval($_POST[$menu->getId()]));
         $ordered_menus[] = $menu;
     }
 }  
 if($order_flg){
     unset($_SESSION["menus"]);
     $_SESSION["ordered_menus"] = $ordered_menus;
     header("location: order_confirmation.php");
     exit;
 }else{
     $_SESSION["error_msg"] = "※必ず一つはご注文ください";
     header("location: menus.php");
     exit;
 }
?>