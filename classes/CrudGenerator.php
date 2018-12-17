<?php


namespace Davidany\CodeGen;


class CrudGenerator
{

	public $projectName;
	public $versionNumber;
	public $destinationPath;

	public function __construct()
	{
	}

	public function getDestinationPath($projectName, $versionNumber)
	{
		$this->projectName     = $projectName;
		$this->versionNumber   = $versionNumber;
		$this->destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/output/' . $projectName . '/' . $versionNumber;

	}

	public function getStub($type)
	{

		echo $_SERVER['DOCUMENT_ROOT'] . "/stubs/$type.stub";

		return file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/stubs/$type.stub");
	}

	protected function model($name)
	{
		$modelTemplate = str_replace(['{{modelName}}'], [$name], $this->getStub('Model'));
		file_put_contents($this->destinationPath . "/{$name}.php"), $modelTemplate);
	}


}