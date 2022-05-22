<?php
include '../common/DBhandler.php';

abstract class Model {
    private static $model = null;

    private function __construct() {
    }

    public static function getInstance() {
        if (self::$model == null) {
            self::$model = new Model();
        }
        return self::$model;
    }
}
