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
		$this->versionNumber = $fileCount + 1;
		print_x($this->versionNumber);
		$this->destinationPath = $this->destinationPath . $this->versionNumber . '/';

	}


	public function getStub($type)
	{
		return file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/stubs/$type.stub");
	}

	public function buildModel()
	{
		foreach ($this->crudValuesArray as $key => $value) {
			$name = $this->crudValuesArray[$key]['ModelClassName'];

			if (!file_exists($this->destinationPath . 'models/')) {
				mkdir($this->destinationPath . 'models/', 0777, true);
			}
			$modelTemplate = str_replace(['{{ModelClassName}}'], [$name], $this->getStub('Model'));
			file_put_contents($this->destinationPath . "models/{$name}.php", $modelTemplate);

		}

	}

	public function buildController()
	{
		foreach ($this->crudValuesArray as $key => $value) {
			$modelClassName                   = $this->crudValuesArray[$key]['ModelClassName'];
			$controllerName                   = $this->crudValuesArray[$key]['ControllerName'];
			$controllerVariableName           = $this->crudValuesArray[$key]['ControllerVariableName'];
			$controllerCompactName            = $this->crudValuesArray[$key]['ControllerCompactName'];
			$viewFolderName                   = $this->crudValuesArray[$key]['ViewFolderName'];
			$unCapitalizedTableNameWithDashes = $this->crudValuesArray[$key]['unCapitalizedTableNameWithDashes'];


			if (!file_exists($this->destinationPath . 'controllers/')) {
				mkdir($this->destinationPath . 'controllers/', 0777, true);
			}
			$modelTemplate = str_replace(['{{ModelClassName}}'], [$modelClassName], $this->getStub('Controller'));
			$modelTemplate = str_replace(['{{ControllerName}}'], [$controllerName], $modelTemplate);
			$modelTemplate = str_replace(['{{ControllerVariableName}}'], [$controllerVariableName], $modelTemplate);
			$modelTemplate = str_replace(['{{ControllerCompactName}}'], [$controllerCompactName], $modelTemplate);
			$modelTemplate = str_replace(['{{ViewFolderName}}'], [$viewFolderName], $modelTemplate);
			$modelTemplate = str_replace(['{{unCapitalizedTableNameWithDashes}}'], [$unCapitalizedTableNameWithDashes], $modelTemplate);
			file_put_contents($this->destinationPath . "controllers/{$controllerName}.php", $modelTemplate);

		}

	}

	public function buildIndexView()
	{
		foreach ($this->crudValuesArray as $key => $value) {
			$viewFolderName            = $this->crudValuesArray[$key]['ViewFolderName'];
			$viewDisplayTableName      = $this->crudValuesArray[$key]['ViewDisplayTableName'];
			$viewIndexColumnTitleTR    = $this->crudValuesArray[$key]['ViewIndexColumnTitleTR'];
			$viewIndexColumnValueTR    = $this->crudValuesArray[$key]['ViewIndexColumnValueTR'];
			$viewClassVariablePlural   = $this->crudValuesArray[$key]['ViewClassVariablePlural'];
			$viewClassVariableSingular = $this->crudValuesArray[$key]['ViewClassVariableSingular'];


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