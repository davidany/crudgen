<?php


namespace Davidany\CodeGen;

use PDO;

class CrudTemplateVariable
{

	public $projectTableNames;
	public $dbCredential;
	public $projectId;
	public $projectColumnNames;
	public $crudValueArray = [];

	public function build($dbCredential, $projectId)
	{
		$this->dbCredential = $dbCredential;
		$this->projectId    = $projectId;
		$this->getTablesAndColumns();

	}

	public function getTablesAndColumns()
	{

		print_x($this->dbCredential);
		$dbProject = DB::getInstance($this->dbCredential->database, $this->dbCredential->host, $this->dbCredential->username, $this->dbCredential->password);
//		die();
		$sql  = "SHOW TABLES FROM {$this->dbCredential->database}";
		$stmt = $dbProject->prepare($sql);
		$stmt->execute();
		$this->projectTableNames = $stmt->fetchAll(PDO::FETCH_COLUMN);

		foreach ($this->projectTableNames as $tableKey => $tableName) {

			$dbProject = DB::getInstance($this->dbCredential->database, $this->dbCredential->host, $this->dbCredential->username, $this->dbCredential->password);
			$sql       = "SHOW COLUMNS  FROM $tableName";
			$stmt      = $dbProject->prepare($sql);
			$stmt->execute();
			$this->projectColumnNames = $stmt->fetchAll(PDO::FETCH_COLUMN);

			// singularize table names
			$singularTableName = Inflect::singularize($tableName);

			// remove underscores
			$capitalizedTableNameWithoutUnderscores = str_replace('_', '', ucwords($singularTableName, '_'));
			$capitalizedTableNameWithDashes         = str_replace('_', '-', ucwords($singularTableName, '_'));
			$unCapitalizedTableNameWithDashes       = str_replace('_', '-', ($singularTableName));

			// uncapitalize first letter
			$unCapitalizedTableNameWithoutUnderscores = lcfirst($capitalizedTableNameWithoutUnderscores);

			$this->crudValueArray[$tableKey]['tableName']                                = $tableName;
			$this->crudValueArray[$tableKey]['singularTableName']                        = $singularTableName;
			$this->crudValueArray[$tableKey]['unCapitalizedTableNameWithoutUnderscores'] = $unCapitalizedTableNameWithoutUnderscores;
			$this->crudValueArray[$tableKey]['capitalizedTableNameWithoutUnderscores']   = $capitalizedTableNameWithoutUnderscores;
			$this->crudValueArray[$tableKey]['unCapitalizedTableNameWithDashes']         = $unCapitalizedTableNameWithDashes;
			$this->crudValueArray[$tableKey]['capitalizedTableNameWithDashes']           = $capitalizedTableNameWithDashes;
			$this->crudValueArray[$tableKey]['ControllerName']                           = $capitalizedTableNameWithoutUnderscores . 'Controller';
			$this->crudValueArray[$tableKey]['ModelClassName']                           = $capitalizedTableNameWithoutUnderscores;
			$this->crudValueArray[$tableKey]['ViewFolderName']                           = $unCapitalizedTableNameWithoutUnderscores;
			$this->crudValueArray[$tableKey]['RouteModelName']                           = $unCapitalizedTableNameWithDashes;
			$this->crudValueArray[$tableKey]['Factory']                                  = $tableName;
			$this->crudValueArray[$tableKey]['MigrationTableName']                       = $tableName;

			foreach ($this->projectColumnNames as $columnKey => $columnName) {
				$this->crudValueArray[$tableKey]['Columns'][$columnKey] = $columnName;

			}

		}

	}

}