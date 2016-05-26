//LOGIN認証するためのHTML画面
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>LOGIN画面</title>
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

<form method="post" action="test2.php">
 <div>
 	<p>
 		ログイン機能はSESSIONを使う
 	</p>
    <p>
        ID：<input type="text" name="login_id" value="" />
    </p>
    <p>
        Passwd：<input type="text" name="login_pw" value="" />
    </p>     
    <p>
        <input type="submit" value="ログイン" />
    </p>
  </div>  
</form>

</body>
</html>