<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 18.03.2018
 * Time: 16:41
 */

class Session
{
    protected static $flash_message;

    /**
     * @param mixed $flash_message
     */
    public static function setFlash($message)
    {
        self::$flash_message = $message;
    }

    public static function hasFlash()
    {
        return !is_null(self::$flash_message);
    }

    public static function flash()
    {
        echo self::$flash_message;
        self::$flash_message = null;
    }
}