<?php
namespace model;

class User extends \core\base\Model {

	public static function create() {
		return new self;
	}

	protected $table = 'users';
}