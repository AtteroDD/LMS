<?php 


core\Router::add('^news/?<action:[a-z-]+>?$', ['controller' => 'pages']);






//правила по умолчанию

//адрес главной страницы
core\Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
//обработка адресов
core\Router::add('^<controller:[a-z-]+>/?<action:[a-z-]+>?$');