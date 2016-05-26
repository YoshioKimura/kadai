<?php
/************************************************************
 *  ログイン認証処理
 ************************************************************/
//LOGIN認証処理だけをするPHPファイル(SESSION開始)

//1. SESSION開始
session_start();

//2. 認証変数をセット
$id  = "test1";       //LOGIN_ID
$pw  = "test1";       //LOGIN_PW

//３．POSTを受信【 ワーク 】
$login_id = $_POST["login_id"];
$login_pw = $_POST["login_pw"];

//４．認証処理POST値と変数$id,$pwが同じであればtrue
if( $login_id==$id && $login_pw==$pw  ) {
  //認証OKならtest3.phpへ
  $_SESSION["sei"] = "デジハリ";
  $_SESSION["mei"] = "太郎";
  $_SESSION["admin"] = 1;

  //5. 処理完了後 test3.php へリダイレクト
  header("Location: test3.php");
  
}else{
  //認証NGならログインフォーム画面へ
  header("Location: test1.php");
  
}
exit;
?>
