<?php

// setcookie("TestCookie", "nimadir");
// setcookie(name: "user_name", "utkirbek",time()+(5));

// var_dump($_COOKIE);
session_start();
$_SERVER['usrname']='utkir';
var_dump($_SESSION);
session_unset();
var_dump($_SESSION)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>_COOKIE</title>
</head>
<body>
	<div>Foydalanuvchi: <?= $_SERVER['usrname']='utkir'; ?></div>
</body>
</html>