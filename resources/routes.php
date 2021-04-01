<?php 


core\Router::add('^news/?<alias:[a-z-]+>?$', ['controller' => 'News']);
core\Router::add('^news/view/?<alias:[a-z-]+>?$', ['controller' => 'News']);

//правила по умолчанию

//адрес главной страницы
core\Router::add('^$', ['controller' => 'Main']);
//обработка адресов
core\Router::add('^<controller:[a-z-]+>/?<action:[a-z-]+>?$');