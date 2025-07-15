<?php
$name=$_POST['name'];
$sur_name=$_POST['sur_name'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
	<div>
		<label>Ismingiz</label>
       <?=$name?>
	</div>
	<div>
		<label>Familyangiz</label>
		<?=$sur_name?>
		
	</div>
	<h1>Rahmat hammaga</h1>
</body>
</html>