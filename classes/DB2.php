<?php

class DB3
{
    protected static $instance;

    protected function __construct($db_name = DB_NAME, $db_host = DB_HOST, $db_user = DB_USERNAME, $db_pass = DB_PASSWORD)
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
            } catch (PDOException $error) {
                echo $error->getMessage();
            }
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

        //var_dump(self::$instance);
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
