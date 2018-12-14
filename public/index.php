<?php


include($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);






?>


<!doctype html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv = "X-UA-Compatible" content = "ie=edge">
	<title>Document</title>
	<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin = "anonymous">
	<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity = "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin = "anonymous"></script>
	<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity = "sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin = "anonymous"></script>

</head>
<body>

<div class = "container">
	<div class = "row">

		<form method = "post" action = "saveDatabase.php">
			<div class = "form-group">
				<label class = "" for = "name">name</label>
				<input type = "text" class = "form-control" name = "name" maxlength = "255" value = "" id = "name">
			</div>

			<div class = "form-group">
				<label class = "" for = "host">host</label>
				<input type = "text" class = "form-control" name = "host" maxlength = "255" value = "" id = "host">
			</div>

			<div class = "form-group">
				<label class = "" for = "database">database</label>
				<input type = "text" class = "form-control" name = "database" maxlength = "255" value = "" id = "database">
			</div>
			<div class = "form-group">
				<label class = "" for = "username">username</label>
				<input type = "text" class = "form-control" name = "username" maxlength = "255" value = "" id = "username">
			</div>
			<div class = "form-group">
				<label class = "" for = "password">password</label>
				<input type = "text" class = "form-control" name = "password" maxlength = "255" value = "" id = "password">
			</div>
			<input type = "submit" class = "btn btn-primary" value = "Login" name = "login">
		</form>

	</div>
</div>

</body>
</html>

