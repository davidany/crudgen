<?php

use Davidany\CodeGen\Database;
error_reporting(E_ALL);
ini_set('display_errors', 1);
//
//var_dump($_SERVER['DOCUMENT_ROOT'] );
//die();


include($_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php');




$projectObject = new Project();
$result         = $projectObject->createProject('databaseView.php');
?>


<!doctype html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv = "X-UA-Compatible" content = "ie=edge">
	<title>FORM FOR Databases</title>
	<?php require_once('head.php'); ?>

	<script src = "assets/scripts/app.js"></script>

</head>
<body><?php require_once('nav.php'); ?>

<div class = "container">
	<div class = "row">

		<form action = "<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post" id = "form" class = "form-horizontal" enctype = "multipart/form-data">
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
			<input type = "submit" name = "button" class = "btn btn-primary btn-large" value = "Register"/>
		</form>

	</div>
</div>

</body>
</html>

