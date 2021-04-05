<?php
require('config.php');
require('core/bootstrap.php');

core\Router::dispatch($query);