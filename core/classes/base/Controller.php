<?php

namespace core\base;

abstract class Controller {
	public $route;
	public $view;
	public $template;
	public $vars = [];
	public $check = true;

	public function __construct($route) {
		$this->route = $route;
		$this->view = $route['action'];
	}

	public function getView() {
		$this->ext();
		$object = new View($this->route, $this->check, $this->template, $this->view);
		$object->render($this->vars);
	}

	public function indexAction() {

	}

	public function ext() {
		
	}
}