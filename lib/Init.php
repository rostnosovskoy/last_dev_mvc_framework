<?php
//namespace lib;

//use lib\Router;
//use lib\Config;

require_once (ROOT.DS.'config'.DS.'config.php');

function __autoload($classname)
{
    $lib_path = ROOT.DS.'lib'.DS.ucfirst(strtolower($classname)).'.php';
    $controller_path = ROOT.DS.'controllers'.DS.str_replace('Controller', '', $classname).'Controller.php';
    $model_path = ROOT.DS.'model'.DS.strtolower($classname).'.php';

    if (file_exists($lib_path)) {
        require_once ($lib_path);
    } elseif (file_exists($controller_path)) {
        require_once ($controller_path);
    } elseif (file_exists($model_path)) {
        require_once ($controller_path);
    } else {
        throw new Exception("Failed include file $classname.php");
    }



}