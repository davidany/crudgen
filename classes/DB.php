<?php

namespace Davidany\CodeGen;

use PDO;

class DB
{
    protected static $instance;

    protected function __construct($db_name = DB_NAME, $db_host = DB_HOST, $db_user = DB_USERNAME, $db_pass = DB_PASSWORD)
    {
        try {
            self::$instance = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        } catch (PDOException $error) {
            echo $error->getMessage();
        }

    }

    public static function getInstance($db_name = DB_NAME, $db_host = DB_HOST, $db_user = DB_USERNAME, $db_pass = DB_PASSWORD)
    {
        if (empty(self::$instance)) {
            try {
                new DB();
                //var_dump(self::$instance);
            } catch (PDOException $error) {
                echo $error->getMessage();
            }
        }

        return self::$instance;
            }

    private function __clone()
    {
        // Stopping Clonning of Object
        }

    private function __wakeup()
    {
        // Stopping unserialize of object
    }
}
