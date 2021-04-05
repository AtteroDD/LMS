<?php 

core\Router::add('^news/?<id:[0-9]+>?$', ['controller' => 'News', 'action' => 'view']);

//правила по умолчанию

//адрес главной страницы
core\Router::add('^$', ['controller' => 'Main']);
//обработка адресов
core\Router::add('^<controller:[a-z-]+>/?<action:[a-z-]+>?$');