<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style3.css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
      integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <title>会員登録画面</title>
</head>
<body>
<div id="container">
<h1>新規会員登録</h1>
<form action="newlogin_act.php" method="post">
<h2>　　　 お名前：<input type="text" name="u_name"  required ></h2>
<h2>　　　　<i class="fas fa-portrait"></i>ID：<input type="text" name="u_id"></h2>
<h2><i class="fas fa-unlock-alt"></i>パスワード：<input type="password" name="u_pw"  required ></h2>
<button>会員登録する</button>
</from>
</div>
</body>
</html>
