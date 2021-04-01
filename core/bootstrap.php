<?php
require('const.php');
require('modules/autoload.php');
require(ROOT.'/resources/routes.php');

//режим отображения ошибок (настраивается в config.php)
if($GLOBALS['config']['debugMode']) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
} else {
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
}


$query = rtrim($_SERVER['QUERY_STRING'], '/');