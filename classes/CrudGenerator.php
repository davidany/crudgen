<?php


namespace Davidany\CodeGen;


class CrudGenerator
{

	public  $projectName;
	public  $versionNumber;
	public  $destinationPath;
	private $crudValuesArray;

	public function __construct($crudValuesArray)
	{
		$this->crudValuesArray = $crudValuesArray;

//		print_x($this->crudValuesArray);
	}

	public function getDestinationPath($projectName)
	{
		$this->projectName     = $projectName;
		$this->destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/output/' . $this->projectName . '/';
		$this->getVersionNumber();

		if (!file_exists($this->destinationPath)) {
			mkdir($this->destinationPath, 0777, true);
		}
		echo $this->destinationPath;
	}

	public function getVersionNumber()
	{

		$directory = $this->destinationPath;
		$fileCount = 0;
		$files     = glob($directory . "*");

		if ($files) {
			$fileCount = count($files);
		}
		$this->versionNumber   = $fileCount + 1;
		$this->destinationPath = $this->destinationPath . $this->versionNumber . '/';

	}


	public function getStub($type)
	{
		return file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/stubs/$type.stub");
	}

	public function buildModel()
	{

		print_x($this->crudValuesArray);
//		die();
		foreach ($this->crudValuesArray as $key => $value) {
			$name = $this->crudValuesArray[$key]['ModelClassName'];
			if (($name == 'Migration') || ($name == 'PasswordReset') || ($name == 'TelescopeEntriesTag') || ($name == 'TelescopeEntry') || ($name == 'TelescopeMonitoring')) {
				// do nothing

			} else {

				if (!file_exists($this->destinationPath . 'models/')) {
					mkdir($this->destinationPath . 'models/', 0777, true);
				}
				$modelTemplate = str_replace(['{{ModelClassName}}'], [$name], $this->getStub('Model'));
				file_put_contents($this->destinationPath . "models/{$name}.php", $modelTemplate);
			}
		}

	}

	public function buildController()
	{
		foreach ($this->crudValuesArray as $key => $value) {
			$modelClassName                   = $this->crudValuesArray[$key]['ModelClassName'];
			$controllerName                   = $this->crudValuesArray[$key]['ControllerName'];
			$controllerVariableName           = $this->crudValuesArray[$key]['ControllerVariableName'];
			$controllerVariableNameSingular   = $this->crudValuesArray[$key]['ControllerVariableNameSingular'];
			$controllerCompactName            = $this->crudValuesArray[$key]['ControllerCompactName'];
			$viewFolderName                   = $this->crudValuesArray[$key]['ViewFolderName'];
			$unCapitalizedTableNameWithDashes = $this->crudValuesArray[$key]['unCapitalizedTableNameWithDashes'];


			if (!file_exists($this->destinationPath . 'controllers/')) {
				mkdir($this->destinationPath . 'controllers/', 0777, true);
			}
			echo 'controller var name d';
			echo '<br>';
			echo $controllerVariableName;
			echo '<br>';
			echo 'd';
			if (($controllerVariableName == 'migrations') || ($controllerVariableName == 'passwordResets')) {
				//  do nothing
			} else {
				$modelTemplate = str_replace(['{{ModelClassName}}'], [$modelClassName], $this->getStub('Controller'));

				$modelTemplate = str_replace(['{{ControllerName}}'], [$controllerName], $modelTemplate);
				$modelTemplate = str_replace(['{{ControllerVariableName}}'], [$controllerVariableName], $modelTemplate);
				$modelTemplate = str_replace(['{{ControllerVariableNameSingular}}'], [$controllerVariableNameSingular], $modelTemplate);
				$modelTemplate = str_replace(['{{ControllerCompactName}}'], [$controllerCompactName], $modelTemplate);
				$modelTemplate = str_replace(['{{ViewFolderName}}'], [$viewFolderName], $modelTemplate);
				$modelTemplate = str_replace(['{{unCapitalizedTableNameWithDashes}}'], [$unCapitalizedTableNameWithDashes], $modelTemplate);
				file_put_contents($this->destinationPath . "controllers/{$controllerName}.php", $modelTemplate);
			}
		}

	}

	public function buildIndexView()
	{
//		print_x($this->crudValuesArray);
		foreach ($this->crudValuesArray as $key => $value) {


			$viewFolderName            = $this->crudValuesArray[$key]['ViewFolderName'];
			$viewDisplayTableName      = $this->crudValuesArray[$key]['ViewDisplayTableName'];
			$viewIndexColumnTitleTR    = $this->crudValuesArray[$key]['ViewIndexColumnTitleTR'];
			$viewIndexColumnValueTR    = $this->crudValuesArray[$key]['ViewIndexColumnValueTR'];
			$viewClassVariablePlural   = $this->crudValuesArray[$key]['ViewClassVariablePlural'];
			$viewClassVariableSingular = $this->crudValuesArray[$key]['ViewClassVariableSingular'];


			echo ' this is where ' . $viewFolderName;
			if (($viewFolderName == 'migration') || ($viewFolderName == 'password-reset')) {
				// do nothing
			} else {
				if (!file_exists($this->destinationPath . 'views/' . $viewFolderName)) {
					mkdir($this->destinationPath . 'views/' . $viewFolderName . '/', 0777, true);
				}
				$modelTemplate = str_replace(['{{ViewFolderName}}'], [$viewFolderName], $this->getStub('index'));
				$modelTemplate = str_replace(['{{ViewDisplayTableName}}'], [$viewDisplayTableName], $modelTemplate);
				$modelTemplate = str_replace(['{{ViewIndexColumnTitleTR}}'], [$viewIndexColumnTitleTR], $modelTemplate);
				$modelTemplate = str_replace(['{{ViewIndexColumnValueTR}}'], [$viewIndexColumnValueTR], $modelTemplate);
				$modelTemplate = str_replace(['{{ViewClassVariablePlural}}'], [$viewClassVariablePlural], $modelTemplate);
				$modelTemplate = str_replace(['{{ViewClassVariableSingular}}'], [$viewClassVariableSingular], $modelTemplate);
				file_put_contents($this->destinationPath . "views/{$viewFolderName}/index.blade.php", $modelTemplate);

			}


		}
	}

	public function buildCreateView()
	{


		foreach ($this->crudValuesArray as $key => $value) {

			$formBlockBuilder = '';

			foreach ($value['Columns'] as $innerKey => $innerValue) {
				$columnName           = $innerValue['ColumnName'];
				$viewDisplayTableName = $innerValue['ColumnDisplayName'];
				$formBlock            = str_replace(['{{ColumnName}}'], [$columnName], $this->getStub('bootstrap-form-group-view'));
				$formBlock            = str_replace(['{{ColumnDisplayName}}'], [$viewDisplayTableName], $formBlock);

				$formBlockBuilder .= $formBlock;
			}


			$viewFolderName       = $this->crudValuesArray[$key]['ViewFolderName'];
			$viewDisplayTableName = $this->crudValuesArray[$key]['ViewDisplayTableName'];


			if (($viewFolderName == 'migration') || ($viewFolderName == 'password-reset')) {

			} else {


				if (!file_exists($this->destinationPath . 'views/' . $viewFolderName)) {
					mkdir($this->destinationPath . 'views/' . $viewFolderName . '/', 0777, true);
				}
				$modelTemplate = str_replace(['{{ViewFolderName}}'], [$viewFolderName], $this->getStub('create'));
				$modelTemplate = str_replace(['{{ViewDisplayTableName}}'], [$viewDisplayTableName], $modelTemplate);
				$modelTemplate = str_replace(['{{FormBlockBuilder}}'], [$formBlockBuilder], $modelTemplate);

				file_put_contents($this->destinationPath . "views/{$viewFolderName}/create.blade.php", $modelTemplate);
			}
		}
	}

	public function buildShowView()
	{

		foreach ($this->crudValuesArray as $key => $value) {

			$formBlockBuilder = '';

			foreach ($value['Columns'] as $innerKey => $innerValue) {
				$columnName                = $innerValue['ColumnName'];
				$viewDisplayTableName      = $innerValue['ColumnDisplayName'];
				$viewClassVariableSingular = $this->crudValuesArray[$key]['ViewClassVariableSingular'];

				$formBlock = str_replace(['{{ColumnName}}'], [$columnName], $this->getStub('paragraph-list-columns'));
				$formBlock = str_replace(['{{ColumnDisplayName}}'], [$viewDisplayTableName], $formBlock);
				$formBlock = str_replace(['{{ViewClassVariableSingular}}'], [$viewClassVariableSingular], $formBlock);

				$formBlockBuilder .= $formBlock;
			}


			$viewFolderName            = $this->crudValuesArray[$key]['ViewFolderName'];
			$viewDisplayTableName      = $this->crudValuesArray[$key]['ViewDisplayTableName'];
			$viewClassVariableSingular = $this->crudValuesArray[$key]['ViewClassVariableSingular'];

			if (($viewFolderName == 'migration') || ($viewFolderName == 'password-reset')) {

			} else {

				if (!file_exists($this->destinationPath . 'views/' . $viewFolderName)) {
					mkdir($this->destinationPath . 'views/' . $viewFolderName . '/', 0777, true);
				}
				$modelTemplate = str_replace(['{{ViewFolderName}}'], [$viewFolderName], $this->getStub('show'));
				$modelTemplate = str_replace(['{{ViewDisplayTableName}}'], [$viewDisplayTableName], $modelTemplate);
				$modelTemplate = str_replace(['{{ViewClassVariableSingular}}'], [$viewClassVariableSingular], $modelTemplate);
				$modelTemplate = str_replace(['{{ParagraphListColumns}}'], [$formBlockBuilder], $modelTemplate);

				file_put_contents($this->destinationPath . "views/{$viewFolderName}/show.blade.php", $modelTemplate);
			}

		}

	}

	public function buildEditView()
	{
		foreach ($this->crudValuesArray as $key => $value) {

			$formBlockBuilder = '';

			foreach ($value['Columns'] as $innerKey => $innerValue) {
				$columnName                = $innerValue['ColumnName'];
				$viewDisplayTableName      = $innerValue['ColumnDisplayName'];
				$viewClassVariableSingular = $this->crudValuesArray[$key]['ViewClassVariableSingular'];

				$formBlock = str_replace(['{{ColumnName}}'], [$columnName], $this->getStub('bootstrap-form-group-edit'));
				$formBlock = str_replace(['{{ColumnDisplayName}}'], [$viewDisplayTableName], $formBlock);
				$formBlock = str_replace(['{{ViewClassVariableSingular}}'], [$viewClassVariableSingular], $formBlock);

				$formBlockBuilder .= $formBlock;
			}


			$viewFolderName       = $this->crudValuesArray[$key]['ViewFolderName'];
			$viewDisplayTableName = $this->crudValuesArray[$key]['ViewDisplayTableName'];
			if (($viewFolderName == 'migration') || ($viewFolderName == 'password-reset')) {
			} else {


				if (!file_exists($this->destinationPath . 'views/' . $viewFolderName)) {
					mkdir($this->destinationPath . 'views/' . $viewFolderName . '/', 0777, true);
				}
				$modelTemplate = str_replace(['{{ViewFolderName}}'], [$viewFolderName], $this->getStub('edit'));
				$modelTemplate = str_replace(['{{ViewDisplayTableName}}'], [$viewDisplayTableName], $modelTemplate);
				$modelTemplate = str_replace(['{{ViewClassVariableSingular}}'], [$viewClassVariableSingular], $modelTemplate);
				$modelTemplate = str_replace(['{{FormBlockBuilder}}'], [$formBlockBuilder], $modelTemplate);

				file_put_contents($this->destinationPath . "views/{$viewFolderName}/edit.blade.php", $modelTemplate);
			}
		}
	}

	public function buildRoute()
	{

		$routeBuilder = '';
		foreach ($this->crudValuesArray as $key => $value) {
			$controllerName = $this->crudValuesArray[$key]['ControllerName'];
			$viewFolderName = $this->crudValuesArray[$key]['ViewFolderName'];


			echo $controllerName . ' route route <br> <br> ';

			if (($controllerName == 'MigrationController') || ($controllerName == 'PasswordResetController')) {
			} else {


				if (!file_exists($this->destinationPath . 'routes/')) {
					mkdir($this->destinationPath . 'routes/', 0777, true);
				}
				$modelTemplate = str_replace(['{{ControllerName}}'], [$controllerName], $this->getStub('route'));
				$modelTemplate = str_replace(['{{ViewFolderName}}'], [$viewFolderName], $modelTemplate);

				$routeBuilder .= $modelTemplate;
				$routeBuilder .= "\r\n";
				$routeBuilder .= "\r\n";
				$routeBuilder .= "\r\n";
			}

		}
		file_put_contents($this->destinationPath . "routes/web.php", $routeBuilder);


	}

	public function buildMigration()
	{

		foreach ($this->crudValuesArray as $key => $value) {

			$formBlockBuilder = '';

			foreach ($value['Columns'] as $innerKey => $innerValue) {
				$migrationTableName = $innerValue['ColumnName'];
				$migrationTableType = $innerValue['ColumnType'];
				$migrationNull      = $innerValue['Null'];
				$migrationKey       = $innerValue['Key'];
				$migrationDefault   = $innerValue['Default'];
				$migrationExtra     = $innerValue['Extra'];

				$columnBuilder = '$table->';


				if ($migrationKey == 'MUL') {
					$columnBuilder .= "unsignedInteger('$migrationTableName')";
				} elseif ($migrationKey == 'PRI') {
					$columnBuilder .= "increments('$migrationTableName')";
				} else {

					$tinyIntSearch      = '/^tinyint/';
					$intSearch          = '/^int/';
					$decimalSearch      = '/^decimal/';
					$decimalInnerSearch = '/\d*\,\d*/';
					$timestampSearch    = '/^timestamp/';
					$datetimeSearch     = '/^datetime/';
					$varSearch          = '/^varchar/';
					$varInnerSearch     = '/\d+/';
					$charSearch         = '/^char/';
					$textSearch         = '/^text/';
					$enumSearch         = '/^enum/';

					if (preg_match($tinyIntSearch, $migrationTableType, $match)) {
						$columnBuilder .= "tinyInteger('$migrationTableName')";
					}
					if (preg_match($intSearch, $migrationTableType, $match)) {
						$columnBuilder .= "integer('$migrationTableName')";
					}
					if (preg_match($timestampSearch, $migrationTableType, $match)) {
						$columnBuilder .= "timestamp('$migrationTableName')";
					}
					if (preg_match($datetimeSearch, $migrationTableType, $match)) {
						$columnBuilder .= "dateTime('$migrationTableName')";
					}
					if (preg_match($textSearch, $migrationTableType, $match)) {
						$columnBuilder .= "text('$migrationTableName')";
					}
					if (preg_match($enumSearch, $migrationTableType, $match)) {
						if (preg_match('!\(([^\)]+)\)!', $migrationTableType, $enumValues)) {
							$enumValueText = $enumValues[1];
						}
						$enumValueArray = explode(',', $enumValueText);
						$columnBuilder  .= "enum('$migrationTableName',[";
						foreach ($enumValueArray as $value) {
							$columnBuilder .= $value . ',';
						}
						$columnBuilder = rtrim($columnBuilder, ',');
						$columnBuilder .= '])';
					}

					if (preg_match($decimalSearch, $migrationTableType, $match)) {
						preg_match($decimalInnerSearch, $migrationTableType, $matches);
						$deciNum       = explode(',', $matches[0]);
						$columnBuilder .= "decimal('$migrationTableName',$deciNum[0],$deciNum[1])";
					}
					if (preg_match($varSearch, $migrationTableType, $match)) {
						preg_match($varInnerSearch, $migrationTableType, $matches);
						$columnBuilder .= "string('$migrationTableName',$matches[0])";
					}
					if (preg_match($charSearch, $migrationTableType, $match)) {
						preg_match($varInnerSearch, $migrationTableType, $matches);
						$columnBuilder .= "char('$migrationTableName',$matches[0])";
					}


				}
//				if ($migrationTableType == )
				if ($migrationDefault != '') {
					$columnBuilder .= "->default($migrationDefault)";
				}
				if ($migrationNull == 'YES') {
					$columnBuilder .= '->nullable()';
				}

				$columnBuilder .= ';';

//				$formBlock = str_replace(['{{ColumnName}}'], [$columnName], $this->getStub('bootstrap-form-group-edit'));
//				$formBlock = str_replace(['{{ColumnDisplayName}}'], [$viewDisplayTableName], $formBlock);
//				$formBlock = str_replace(['{{ViewClassVariableSingular}}'], [$viewClassVariableSingular], $formBlock);

				$formBlockBuilder .= $columnBuilder;
			}
//			$formBlockBuilder .= '$table->timestamps();';


			$migrationTableName = $this->crudValuesArray[$key]['MigrationTableName'];
			$migrationClassName = $this->crudValuesArray[$key]['MigrationClassName'];
			$viewFolderName     = $this->crudValuesArray[$key]['ViewFolderName'];
			$migrationFileName  = $this->crudValuesArray[$key]['MigrationFileName'];

			echo ' <br> wha wha here ' . $migrationTableName;
			if (($migrationTableName == 'migrations') || ($migrationTableName == 'password_resets')) {

			} else {
				if (!file_exists($this->destinationPath . 'migrations')) {
					mkdir($this->destinationPath . 'migrations/', 0777, true);
				}
				$modelTemplate = str_replace(['{{MigrationTableList}}'], [$formBlockBuilder], $this->getStub('migration'));
				$modelTemplate = str_replace(['{{MigrationClassName}}'], [$migrationClassName], $modelTemplate);
				$modelTemplate = str_replace(['{{MigrationTableName}}'], [$migrationTableName], $modelTemplate);


				file_put_contents($this->destinationPath . "migrations/{$migrationFileName}.php", $modelTemplate);
			}
		}
	}


}


