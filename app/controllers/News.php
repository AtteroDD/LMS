<?php
namespace controller;

class News extends \core\base\Controller {
	public function indexAction() {
		
	}

	public function viewAction() {
		if(array_key_exists('id', $this->route)) {
			$this->vars['id'] = $this->route['id'];
		}
	}
}