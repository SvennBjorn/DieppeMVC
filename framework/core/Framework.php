<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 11/05/2018
 * Time: 10:09
 */

class Framework
{
public static function run()
{
    self::init();
    self::autoload();
    self::dispatch();
}
public static function init()
{
define("DS",DIRECTORY_SEPARATOR);
}
public  static function autoload()
{

}
public static function dispatch()
{

}

}