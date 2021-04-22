<?php

namespace core;

class Database {
	private $pdo;
	private static $instance;

	private function __construct() {
		$this->pdo = new \PDO($GLOBALS['config']['dsn'], $GLOBALS['config']['db_user'], $GLOBALS['config']['db_pass']);
	}

	public static function instance() {
		if(self::$instance === null) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function execute($query) {
		$statement = $this->pdo->prepare($query);
		return $statement->execute();
	}

	public function query($query) {
		$statement = $this->pdo->prepare($query);
		$res = $statement->execute();
		if($res !== false) {
			return $statement->fetchAll();
		}
		return [];
	}
}