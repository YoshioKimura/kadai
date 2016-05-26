<?php
//DB接続
function db(){
try {
  return new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

    
    
}

//認証OK時の初期値セット
function loginSessionSet(){

}

//セッションチェック用関数
function sessionCheck(){

}

//ログイン時のセッションへの情報セット
function loginRollSet(){

}

//HTML XSS対策
function htmlEnc($value) {
    return htmlspecialchars($value,ENT_QUOTES);
}
?>
