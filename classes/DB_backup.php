<?php

namespace Davidany\CodeGen;

use PDO;

class DB343
{
    public static $instance  = null;
    public static $instances = array();


    private function __construct()
    {
    }

    public static function getInstance($db_name = DB_NAME, $db_host = DB_HOST, $db_user = DB_USERNAME, $db_pass = DB_PASSWORD)
    {
        echo $db_name.' '.$db_host.' '.DB_NAME;

        if ($db_name == DB_NAME) {
            self::$instances[$db_name] = '';
        }


        $hostName = $db_host;
        $dbName   = $db_name;
        $userName = $db_user;
        $password = $db_pass;
        try {
            if (!isset(self::$instances[$db_name])) {
                if (!self::$instances[$db_name]) {
                    self::$instances[$db_name] = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $password);
                    echo "Connected successfully";

                    return self::$instances[$db_name];
                }
            }
        } catch (PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }

        if (!isset(self::$instances[$db_name])) {
            if (!self::$instances[$db_name]) {
                self::$instances[$db_name] = new PDO('mysql'.":host=".'localhost'.";dbname=".'random'."", 'root', 'crud');
                self::$instances[$db_name]->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        }
        print_x(self::$instances);
        var_dump($db_name);
#        php -r "new PDO('mysql:host=localhost;port=3306;charset=utf8;dbname=random', 'root', 'crud');"

//        print_x(self::$instances[$db_name]);
//        print_x(DB_TYPE);
//        print_x($db_host);
//        print_x($db_name);
//        print_x($db_user);
//        print_x($db_pass);
        return self::$instances[$db_name];
        ////		}else{
        //
        //			if (!self::$instance) {
        //				self::$instance = new PDO("" . DB_TYPE . ":host=" . $db_host . ";dbname=" . $db_name . "", $db_user, $db_pass);
        //				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //			}
        //			return self::$instance;


    }
}
