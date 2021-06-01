<?php
namespace model;

class User extends \core\base\Model {

	public function __construct() {

		$db = \core\Database::instance();
		$check = $db->query('SELECT * FROM users WHERE mail = "'.$_COOKIE['mail'].'" AND password = "'.$_COOKIE['password'].'";');
		if($check == []) {
			header('Location: /');
		}
		return true;
	}

	public static function guestOnly() {
	}

	public static function session() {
		session_start();
		if (array_key_exists("auth_email", $_POST) and array_key_exists("auth_pass", $_POST)) {

			setcookie('mail', $_POST['auth_email']);
			setcookie('password', $_POST['auth_pass']);

			return true;
		} else {

			$GLOBALS['mail'] = ' ';
			$GLOBALS['password'] = ' ';

			return false;
		}
	}

	public static function create($check) {
		if ($check) {
			return new self;
		}
		return false;
	}
}