<?php
//  inquiry.php
?>

	<!DOCTYPE html>
	<html lang="ja">

	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body>
	  <form action="./inquiry_fin.php" method="post">
    emailアドレス(*):<input type="text" name="email"><br>
    名前:<input type="text" name="name"><br>
    誕生日:<input type="text" name="birthday"><br>
    問い合わせ内容<textarea name="body"></textarea><br>
    <button>問い合わせる</button>
  </form>
	</body>

	</html>