<?php 

namespace core\base;

abstract class Model {
	private $pdo;
	protected $table;

	public function __construct() {
		$this->pdo = \core\Database::instance();
	}
	
	public function query($query) {
		return $this->pdo->execute($query);
	}

	public function findAll() {
		$query = "SELECT * FROM ".$this->table;
		return $this->pdo->query($query);
	}
}