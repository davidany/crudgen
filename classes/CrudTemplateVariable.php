<?php


namespace Davidany\CodeGen;

use Carbon\Carbon;
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
//		print_x($this->crudValueArray);
	}

	public function getTablesAndColumns()
	{

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

			$capitalizedTableNameWithoutUnderscoresPlural   = str_replace('_', '', ucwords($tableName, '_'));
			$capitalizedTableNameWithSpacesPlural           = str_replace('_', ' ', ucwords($tableName, '_'));
			$unCapitalizedTableNameWithoutUnderscoresPlural = str_replace('_', '', ucwords($tableName, '_'));
			$unCapitalizedTableNameWithoutUnderscoresPlural = lcfirst($unCapitalizedTableNameWithoutUnderscoresPlural);

			// singularize table names
			$singularTableName = Inflect::singularize($tableName);

			// remove underscores
			$capitalizedTableNameWithoutUnderscores = str_replace('_', '', ucwords($singularTableName, '_'));
			$capitalizedTableNameWithDashes         = str_replace('_', '-', ucwords($singularTableName, '_'));
			$unCapitalizedTableNameWithDashes       = str_replace('_', '-', ($singularTableName));


			//Migration Class Name
			$migrationClassName = 'Create' . $capitalizedTableNameWithoutUnderscores . 'Table';
			//Migration File Name
			$date                = Carbon::now();
			$migrationDatePrefix = $date->format('Y_m_d_His');

			$migrationFileName = $migrationDatePrefix . '_create_' . $tableName . '_table';
			// uncapitalize first letter
			$unCapitalizedTableNameWithoutUnderscores = lcfirst($capitalizedTableNameWithoutUnderscores);


			$this->crudValueArray[$tableKey] = [
				'ControllerName'                                 => $capitalizedTableNameWithoutUnderscores . 'Controller',
				'MigrationClassName'                             => $migrationClassName,
				'MigrationFileName'                              => $migrationFileName,
				'MigrationTableName'                             => $tableName,
				'ControllerVariableName'                         => $unCapitalizedTableNameWithoutUnderscoresPlural,
				'ControllerCompactName'                          => $unCapitalizedTableNameWithoutUnderscoresPlural,
				'ViewDisplayTableName'                           => $capitalizedTableNameWithSpacesPlural,
				'ViewClassVariablePlural'                        => $unCapitalizedTableNameWithoutUnderscoresPlural,
				'ViewClassVariableSingular'                      => $unCapitalizedTableNameWithoutUnderscores,
				'singularTableName'                              => $singularTableName,
				'capitalizedTableNameWithoutUnderscoresPlural'   => $capitalizedTableNameWithoutUnderscoresPlural,
				'unCapitalizedTableNameWithoutUnderscoresPlural' => $unCapitalizedTableNameWithoutUnderscoresPlural,
				'unCapitalizedTableNameWithoutUnderscores'       => $unCapitalizedTableNameWithoutUnderscores,
				'capitalizedTableNameWithoutUnderscores'         => $capitalizedTableNameWithoutUnderscores,
				'unCapitalizedTableNameWithDashes'               => $unCapitalizedTableNameWithDashes,
				'capitalizedTableNameWithDashes'                 => $capitalizedTableNameWithDashes,
				'ModelClassName'                                 => $capitalizedTableNameWithoutUnderscores,
				'ViewFolderName'                                 => $unCapitalizedTableNameWithDashes,
				'RouteModelName'                                 => $unCapitalizedTableNameWithDashes,
				'Factory'                                        => $tableName,
				'ViewIndexColumnTitleTR'                         => '',
				'ViewIndexColumnValueTR'                         => ''
			];
			foreach ($this->projectColumnNames as $columnKey => $columnName) {
				$displayColumnName                                                           = str_replace('_', ' ', ucwords($columnName, '_'));
				$this->crudValueArray[$tableKey]['Columns'][$columnKey]['ColumnName']        = $columnName;
				$this->crudValueArray[$tableKey]['Columns'][$columnKey]['ColumnDisplayName'] = $displayColumnName;
				$displayColumnName                                                           = str_replace('_', ' ', ucwords($columnName, '_'));
				$this->crudValueArray[$tableKey]['ViewIndexColumnTitleTR']                   .= '<td scope="col">' . $displayColumnName . '</td>';
				$this->crudValueArray[$tableKey]['ViewIndexColumnValueTR']                   .= '<td>{{$' . $unCapitalizedTableNameWithoutUnderscores . '["' . $columnName . '"]}}</td>';


			}
		}
		print_x($this->crudValueArray);

	}

}