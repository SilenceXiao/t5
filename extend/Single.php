<?php


/**
 * 单例模式
 * Undocumented class
 */
class Single {

    static public $instance = null;
    private function __construct() {

    }

    public static function getInstance() {
        if(is_null(self::$instance)){
            self::$instance = new Single();
        }
        return self::$instance;

    }

}