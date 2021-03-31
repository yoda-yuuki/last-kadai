<?php
require "Menu.php";
session_start();
$totalPrice = 0;

if($_SESSION["ordered_menus"]){
    $ordered_menus = $_SESSION["ordered_menus"];
    foreach($ordered_menus as $menu) {
        $totalPrice += $menu->getTotalprice();
    }
}

?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文完了画面</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
       <h2 class="h2">この内容で注文しますか?</h2>
       <div class="cnf_menus">
           <?php foreach($ordered_menus as $menu):?>
            <div class="cnf_menu">
                <img class="cnf_img" src="<?php echo $menu->getImg(); ?>">
                <p>
                    <?php echo $menu->getName(); ?>
                    <span> :  </span>
                    <?php echo $menu->getTaxIncludedPrice(); ?>×
                    <?php echo $menu->getAmount(); ?>

                </p>

            </div>
            <?php endforeach; ?>
       </div>
       <h3 class="h2">合計金額<span> :  </span>
        <?php echo $totalPrice; ?>円
       </h3>
       <a class="btn" href="orderController.php?procedure=order">注文する</a>
       <a class="btn" href="orderController.php?procedure=cancel">キャンセル</a>
    </div>   
   
</body>
<script src="../js/menus.js"></script>
</html>