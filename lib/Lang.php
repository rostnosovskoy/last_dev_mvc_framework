<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 17.03.2018
 * Time: 17:31
 */

class Lang
{
    protected static $data;

    public function load($lang_code)
    {
       $lang_file_path = ROOT.DS.'lang'.DS.strtolower($lang_code).'.php';

       if (file_exists($lang_file_path)){
          self::$data = include($lang_file_path);
       } else {
           throw new Exception('Lang file not found: '.$lang_file_path);
       }
    }

    public static function get($key, $default_value)
    {
        return isset(self::$data[strtolower($key)]) ? self::$data[strtolower($key)] : $default_value;
    }
}