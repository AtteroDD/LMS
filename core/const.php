<?php

//корень сайта
define('ROOT', $GLOBALS['config']['rootDir']);
//логическое ядро
define('CORE', ROOT.'/core');
//каталог библиотек
define('LIB', ROOT.'/lib');
//каталог приложения
define('APP', ROOT.'/app');
//директория views
define('VIEW', APP.'/views');

//текущая директория
define('DIR', __DIR__);