<?php
session_start();
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

//1. 接続します
try {
  $pdo = new PDO('mysql:dbname=y2_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//２．データ登録SQL作成
$sql = "SELECT * FROM y2_table WHERE u_id=:lid AND u_pw=:lpw";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $lid);
$stmt->bindValue(':lpw', $lpw);
$res = $stmt->execute();

//SQL実行時にエラーがある場合
if($res==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}

//３．抽出データ数を取得
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()
$val = $stmt->fetch(); //1レコードだけ取得する方法

//４. 該当レコードがあればSESSIONに値を代入
if( $val["id"] != "" ){
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["u_name"]   = $val['u_name'];
  //Login処理OKの場合select.phpへ遷移
  header("Location: menus.php");
}else{
  //Login処理NGの場合login.phpへ遷移
  header("Location: login.php");
}
//処理終了
exit();
?>


