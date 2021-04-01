<?php

namespace core\base;

abstract class Controller {
	private $route;
	private $view;

	public function __construct($route) {
		$this->route = $route;
		$this->view = $route['action'];
		include VIEW.'/'.$route['controller'].'/'.$route['action'].'.php';
	}

	public function indexAction() {

	}
}