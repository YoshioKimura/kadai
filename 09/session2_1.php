<?php
/************************************************************
 *  session2_1.php
 *  SESSION表示
 *  他ページに移動してもSESSIONに値が残ってる事を確認
 ************************************************************/
session_start();
$_SESSION['test'] = 'テスト';
echo $_SESSION['test']."<br>";
echo '<a href="session2_2.php">session2_2.php</a>';
?>
