<?php

session_start();
date_default_timezone_set('America/New_York');
//header('Content-Type: text/html; charset=utf-8');

//$whoops = new \Whoops\Run;
//$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
//$whoops->register();
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


$dotenv = Dotenv\Dotenv::createImmutable(  __DIR__ . '/../');
$dotenv->load();

define('DB_CONNECTION', $_ENV['DB_CONNECTION']);
define('DB_TYPE',  $_ENV['DB_TYPE']);
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_DATABASE', $_ENV['DB_DATABASE']);
define('DB_USERNAME', $_ENV['DB_USERNAME']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_NAME', $_ENV['DB_DATABASE']);

/*
DB_CONNECTION=mysql
DB_HOST=crud-mysql
DB_PORT=3306
DB_DATABASE=crud
DB_USERNAME=crud
DB_PASSWORD=crud
/*
 *
 */


/*


define('DB_TYPE', 'mysql');
define('LOCALHOST', 'mysql');
define('DB_NAME', 'crudgen');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');

/*
    */
