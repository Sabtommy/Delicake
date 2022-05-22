<?php
abstract class DBHandler {
    private static $db;

    private function __construct() {
    }

    public static function getInstance() {
        if (self::$db == null) {
            self::connect_database();
        }
        return self::$db;
    }

    private function connect_database() {
        define('USER', 'delicake');
        define('PASSWORD', 'H@U%XGS$j6DS@7Hs7PNd%IFIMSBY%KrljR8KA6ov&hBZvcGudx');

        // Database connection
        try {
            $connection_string = 'mysql:host=localhost;dbname=delicake;charset=utf8';
            $connection_array = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            );

            self::$db = new PDO($connection_string, USER, PASSWORD, $connection_array);
        } catch (PDOException $e) {
            $this->db = null;
        }
    }
}
