<?php
	
class Auth {
	
    private static $obj;

    public static function setObj(){
       self::$obj = 2;
    }

    public static function getObj(){
        return self::$obj;
    }
}