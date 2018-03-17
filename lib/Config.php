<?php
/**
 * Created by PhpStorm.
 * User: User12
 * Date: 3/15/2018
 * Time: 3:26 PM
 */
//namespace lib;

class Config
{
    protected static $settings = [];

    public static function get($key)
    {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }

    public static function set($key, $value)
    {
        return self::$settings[$key] = $value;
    }
}