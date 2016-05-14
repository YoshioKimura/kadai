<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>fputs</title>
</head>
<body>
<?php
/* ------------------------------------------------------------------------
■例 ファイル読み込み
fputs.php

■実例；
$name = $_POST["name"];
$mail = $_POST["mail"];
$age  = $_POST["age"];
$comment = $_POST["comment"];
$str = $name.",".$mail.",".$age.",".$comment."\n";

$file = fopen("data/data.txt","a");
flock($file, LOCK_EX);
fputs($file,$str);
flock($file, LOCK_UN);
fclose($file);

------------------------------------------------------------------------ */

//以下に記述してみましょう
$name = $_POST["name"];
$mail = $_POST["mail"];
$postcode1  = $_POST[""];
$postcode2  = $_POST["postcode2"];
$sex  = $_POST["sex"];
$satisfaction  = $_POST["satisfaction"];
$learning  = $_POST["learning"];    
$solving  = $_POST["solving"];    
$request  = $_POST["request"];
    
//文字列を作成
$str = $name.",".$mail.",".$postcode1."\n".$postcode2.",".$sex.",".$satisfaction."\n".$learning.",".$solving.",".$request."\n";

//File操作
$file = fopen("data/data.csv","a");
flock($file, LOCK_EX); //ロック開始
fputs($file,$str);     //書き込み！！
flock($file, LOCK_UN); //ロック解除
fclose($file);



print 'にメールを送りましたのでご確認ください';
$mail_sub='アンケート受け付けました';
$mail_body=$name."様へ\nアンケートのご協力ありがとうございます。";
$mail_body=html_entty_decode($mail_body,ENT_QUOTES,"UTF-8");
$mail_head='from: thk.rspt.csd@gmail.com';
mb_language('Japanese');
mb_interna_lencoding("UTF-8");
mb_send_mail($email,$mail_sub,$mail_body,$mail_head);
    
?>
ファイルの中を確認してください。



</body>
</html>
