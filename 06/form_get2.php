<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$tell = $_POST["tell"];
$tell = $_POST["sex"];

echo date("Y年m月d日 H時i分s秒");

if ($name ==""){
    $name = '<span style ="color:red">未入力</style>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div>名前:<?php echo $name; ?></div><br>
    <div>MAIL:<?php echo $mail; ?></div><br>
    <div>TELL:<?php echo $tell; ?></div><br>
    <div>TELL:<?php echo $sex; ?></div><br>
</body>
</html>
