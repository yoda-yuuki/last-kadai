<?php
require "menu.php";
session_start();

if($_SESSION["menus"] == null){
    $menus = array(
        new Menu("1","シーフードパエリア","../menu_images/paella.jpg",1000),
        new Menu("2","短角牛のロースト","../menu_images/meat.jpg",1500),
        new Menu("3","カルボナーラ","../menu_images/carbonara.jpg",1000),
        new Menu("4","濃厚ポモドーロ","../menu_images/pomodoro.jpg",1000),
        new Menu("5","いちじくのブラウニー","../menu_images/brownie.jpg",500),
        new Menu("6","本日のタルト","../menu_images/tarte.jpg",500),
        new Menu("7","生ビール","../menu_images/beer.jpg",500),
        new Menu("8","アイスコーヒー","../menu_images/coffee.jpg",300),
        new Menu("9","アイスティー","../menu_images/icetea.jpg",300),
        new Menu("10","自家製ジンジャエール","../menu_images/ginger.jpg",300),
        
    );

    $_SESSION["menus"] = $menus;
}

header("location: menus.php");
exit;





?>