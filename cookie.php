<?php

// setcookie("TestCookie", "nimadir");
setcookie("user_name", "utkirbek",time()+(5));

// var_dump($_COOKIE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>_COOKIE</title>
</head>
<body>
	<div>Foydalanuvchi: <?= $_COOKIE['user_name']?></div>
</body>
</html>