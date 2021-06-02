<?php
namespace controller;


class Main extends \core\base\Controller {
	//public $template = "название шаблона"; // для подключения шаблона, отличного от стандартного
	public $check = true;

	public function indexAction() {
		$this->check = false;
		\model\User::guestOnly();
		$this->template = 'light';
		//$this->view = false; // если необходимо не подключать шаблон и вид
		//$this->view = "название вида"; // для подключения вида, отличного от названия action
		//$this->template = "название шаблона"; // для подключения шаблона в action
		//$this->vars = ["var1" => '5', "var2" => '10']; // передача переменных в вид
	}

	public function errorAction() {
		$this->check = false;
		$this->template = 'light';
	}

	public function menuAction() {

	}

	public function ext() {
		\model\User::session();
		if($this->check) {
			\model\User::create($this->check);
		}
	}
}