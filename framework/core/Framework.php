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
define("ROOT",getcwd(). DS);
define("APP_PATH",ROOT. 'application' . DS);
define("FRAMEWORK_PATH", ROOT . 'framework' . DS);
define("PLUBIC_PATH", ROOT. 'public' . DS);

define("CONFIG_PATH",APP_PATH . 'config'. DS);
define("CONTROLLER_PATH",APP_PATH . 'controllers' . DS);
define("MODEL_PATH",APP_PATH . 'models'. DS);
define("VIEW_PATH",APP_PATH . 'views' . DS);

define("CORE_PATH", FRAMEWORK_PATH . 'core' . DS);
define("DATABASE_PATH", FRAMEWORK_PATH . 'database' . DS);

 require CORE_PATH . "Controller.class.php";
 require CORE_PATH . "Loader.class.php";
 require DATABASE_PATH . "Database.class.php";
 require CORE_PATH . "Model.class.php";

 session_start();

}

public  static function autoload()
{
 spl_autoload_register(array(__CLASS__, 'load'));
}

private static function load($classname)
{
    if (substr($classname, -10) == "Controller")
    {
        require_once CONTROLER_PATH .  "front/$classname.class.php";
    }

    elseif (substr($classname, -5) == "Model")
    {
        require_once  MODEL_PATH . "$classname.class.php";
    }
}

public static function dispatch()
{

}

}