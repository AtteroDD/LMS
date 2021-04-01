<?php
require('config.php');
require('core/bootstrap.php');
require('lib/debug/functions.php');

core\Router::dispatch($query);
debug(core\Router::get());
