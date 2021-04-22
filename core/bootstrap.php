<?php

//автоподгрузка классов
require('modules/autoload.php');


//константы
require('const.php');
//конфиг
\core\structure\Config::set(ROOT.'/config.php');


//глобальные функции
require('modules/functions.php');
//маршруты
require(ROOT.'/app/routes.php');

//режим отображения ошибок (настраивается в config.php)
if(config('debug_mode')) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
} else {
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
}

$query = rtrim($_SERVER['QUERY_STRING'], '/');