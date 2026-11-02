<?php

class Session 
{
    public static $data = [];
    public static $flashData = [];

    public static function getFlash($name)
    {
        $value = self::$flashData[$name];
        unset(self::$flashData[$name]);

        return $value;
    }
    // Set
    public static function set($name , $value)
    {
        self::$data[$name] = $value;
    }
    // get
    public static function get($name)
    {
         return self::$data[$name];
    }
    //Flash
    public static function flash($name, $value)
    {
         self::$flashData[$name] = $value;
    }
    //Remove
    public static function remove($name)
    {
        unset(self::$data[$name]);
    }
    // RemoveAll
    public static function removeAll()
    {
        self::$data = [];
    }
    //GetAll
    public static function getAll()
    {
        return self::$data;
    }
    //Check
    public static function check($name)
    {
        return isset(self::$data[$name]);
    }
}