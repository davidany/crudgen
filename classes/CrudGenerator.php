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
		$this->projectName = $projectName;
		$this->getVersionNumber();
		$this->destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/output/' . $this->projectName . '/' . $this->versionNumber . '/';

		if (!file_exists($this->destinationPath)) {
			mkdir($this->destinationPath, 0777, true);
		}
		echo $this->destinationPath;
	}

	public function getVersionNumber()
	{
		$this->versionNumber = 1;
	}

	public function buildModel()
	{
		$this->model();
	}

	public function getStub($type)
	{


		return file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/stubs/$type.stub");
	}

	protected function model()
	{
		foreach ($this->crudValuesArray as $key => $value) {
			$name = $this->crudValuesArray[$key]['ModelClassName'];

			$modelTemplate = str_replace(['{{ModelClassName}}'], [$name], $this->getStub('Model'));
//			echo $this->destinationPath . "/{$name}.php";
			file_put_contents($this->destinationPath . "/{$name}.php", $modelTemplate);

		}

	}


}