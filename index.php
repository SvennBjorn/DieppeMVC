<?php
date_default_timezone_set("Europe/Paris");
require_once "./functions/classAutoLoader.php";
spl_autoload_register('classAutoLoader');

$toto = new Controler();

$machin = explode("/", $toto->getURL());
$resultURL = array_shift($machin);

echo "<pre>";
var_dump($machin);
echo "</pre>";
