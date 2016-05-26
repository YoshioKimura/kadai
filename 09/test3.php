<?php
/************************************************************
 *  ログイン認証OKの場合表示
 ************************************************************/
//1. SESSION開始
session_start();


if($_SESSION["sei"]!="" && $_SESSION["mei"]!="" ){
  //OK
}else{
  echo "Error!";
  exit;
}

//2. 認証後にSetされたSESSION変数を受け取り表示
//姓 名
$name = "<p>名前： " . $_SESSION["sei"] . " " . $_SESSION["mei"] . "</p>";

//3. 管理者FLGを表示
if( $_SESSION["admin"]==1 ) {
  $admin  =  "<p>権限：管理者</p>";
  $admin .=  '<p><a href="#">管理者メニュー</a></p>';
}else if( $_SESSION["admin"]==0 ){
  $admin = "<p>権限：一般</p>";
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>ログイン後画面</title>
<style>
div{
  position:absolute;
  top:100px;
  left:200px;
  border:1px solid #777;
  width:500px;
  padding:50px;
}
</style>
</head>
<body>
 <div>
    <p>
        <?=$admin?>
    </p>
    <p>
        <?=name?>
    </p>
  </div>
</body>
</html>
