<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$name=$_POST['name'];
	$sur_name=$_POST['sur_name'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
	<title>Forma</title>
</head>
<body>
	<div class="container">
		<form class="form-control" method="POST" action="">
			  <div class="form-group">
			    <label>Ismingiz</label>
			    <input type="text" class="form-control" name="name" placeholder="Ismingizni kiriting">
			  </div>
			  <div class="form-group">
			    <label>Familyangiz</label>
			    <input type="text" class="form-control" name="sur_name" placeholder="Familyangizni kiriting">
			  </div>
			  <button type="submit" class="btn btn-primary">Junatish</button>
		</form>
	</div>
	<div>
		<label>Ismingiz</label>
       <?= $name?>
	</div>
	<div>
		<label>Familyangiz</label>
		<?= $sur_name?>
		
	</div>
      
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
