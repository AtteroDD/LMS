<?php
namespace controller;

class News extends \core\base\Controller {
	public function indexAction() {
		
	}

	public function viewAction() {
		$this->vars['id'] = $this->route['id'];
	}
}