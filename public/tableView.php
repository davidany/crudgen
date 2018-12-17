<?php

use Davidany\CodeGen\Database;
use Davidany\CodeGen\Table;

error_reporting(E_ALL);
ini_set('display_errors', 1);
//
//var_dump($_SERVER['DOCUMENT_ROOT'] );
//die();


include($_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php');

$databaseId     = $_GET['databaseId'];
$databaseObject = new Database();
$databaseResult = $databaseObject->getDatabaseById($databaseId);

$tableObject = new Table();
$result      = $tableObject->listTablesByDatabaseId($databaseResult);

?>

<!doctype html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv = "X-UA-Compatible" content = "ie=edge">
	<title>View Database Records</title>
	<?php require_once('head.php'); ?>

	<style type = "text/css">
		body {
			margin-left: 30px;
		}


	</style>
</head>

<body>
<?php require_once('nav.php'); ?>


<div class = "row">
	<div class = "col-md-8">
		<h3></h3>
		<h3></h3>
		<h4>View Database Records</h4>


		<table align = "center" class = "table table-striped table-bordered">
			<thead>
			<tr>
				<th>name</th>
				<th>host</th>
				<th>database</th>
				<th>username</th>
				<th>password</th>

				<th>edit</th>
				<th>delete</th>
				<th>search</th>
			</tr>
			</thead>
			<tbody>

			<?php

			//			//Loop through
			foreach ($result as $rows) {

				?>
				<tr>
					<td><a href = "tableView.php?databaseId=<?php echo $rows->id; ?>"><?php echo ucwords($rows->name); ?></a></td>
					<td><?php echo ucwords($rows->host); ?></td>
					<td><?php echo ucwords($rows->database); ?></td>
					<td><?php echo ucwords($rows->username); ?></td>
					<td><?php echo ucwords($rows->password); ?></td>


					<td width = "25px" class = ""><a href = "databaseUpdate.php?databaseId=<?php echo $rows->id; ?>" title = "Update"><span class = "btn btn-mini"><img
										src = "assets/icons/update.png" width = "16" height = "16"></span></a>
					</td>
					<td width = "25px"><a href = "databaseView.php?databaseId=<?php echo $rows->id; ?>" title = "Delete"> <span class = "btn btn-mini"><img
										src = "assets/icons/delete.png" width = "16" height = "16"></span></a>
					</td>
					<td width = "25px"><a href = "databaseDetails.php?databaseId=<?php echo $rows->id; ?>" title = "Details"><span class = "btn btn-mini"><img
										src = "assets/icons/details.png"

										height = "16"></span></a>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>

</body>
</html>
