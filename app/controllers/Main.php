<?php
namespace controller;


class Main extends \core\base\Controller {
	//public $template = "название шаблона"; // для подключения шаблона, отличного от стандартного

	public function indexAction() {
		//$this->view = false; // если необходимо не подключать шаблон и вид
		//$this->view = "название вида"; // для подключения вида, отличного от названия action
		//$this->template = "название шаблона"; // для подключения шаблона в action
		//$this->vars = ["var1" => '5', "var2" => '10']; // передача переменных в вид
	}

	public function errorAction() {

		$this->template = 'error';
	}

	public function menuAction() {
		$model = \model\User::create();
	}
}