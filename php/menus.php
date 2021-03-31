<?php
require "menu.php";
session_start();

if($_SESSION["menus"]){
    $menus = $_SESSION["menus"];
}

?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lunch menu</title>
    <link rel="stylesheet" href="../css/style.css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
      integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <?php if(isset($_SESSION["error_msg"])): ?>
            <div class="error">
                <p class="error_msg"><?php echo $_SESSION["error_msg"]; ?></p>
            </div>
        <?php endif; ?>
        <h2 class="h2"><i class="fas fa-utensils"></i>　Lunch menu　<i class="fas fa-utensils"></i></h2>
        <form id="order_submit" action="confirmationController.php" method="POST">
        <div class="menus">
        
        <?php foreach($menus as $menu): ?>
        <div class="menu">
        <img class="img" src="<?php echo $menu->getImg(); ?>" alt="">
        <p><?php echo $menu->getName(); ?></p>
        <p>￥<?php echo $menu->getTaxIncludedPrice(); ?>(税込)</p>
        <div class="cp_ipselect cp_sl01">
        <select name="<?php echo $menu->getId(); ?>">
            <option value="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        
        </select>
        </div>
        </div>
            <?php endforeach; ?> 


        </div>
        
        </form>
         <span id="btn" class="btn">注文する</span>
    </div>   
   
</body>
<script src="../js/menus.js"></script>
</html>