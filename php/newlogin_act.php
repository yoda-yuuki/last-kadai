<?php
session_start();

//1. POSTデータ取得
$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$u_pw = $_POST["u_pw"];



//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=y2_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$sql = "INSERT INTO y2_table(id, u_name, u_id, u_pw, indate)VALUES(NULL,:a1, :a2, :a3, sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $u_name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $u_id, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $u_pw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;

}
?>
