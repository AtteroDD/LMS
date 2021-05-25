<?php

namespace core;

class Database {

	private $pdo;
	private static $instance;

	private function __construct() {
		$options = [
			\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
			\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
		];
		$this->pdo = new \PDO(
			config('dsn'), 
			config('db_user'), 
			config('db_pass'), 
			$options
		);
	}

	//реализация синглтона
	public static function instance() {
		if(self::$instance === null) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	//проверка на выполнение запроса
	public function execute($query) {
		$stmt = $this->pdo->prepare($query);
		return $stmt->execute();
	}

	//запрос с выводом данных
	public function query($query) {
		$stmt = $this->pdo->prepare($query);
		$res = $stmt->execute();
		if($res !== false) {
			return $stmt->fetchAll(\PDO::FETCH_ASSOC);
		}

		return [];
	}
}