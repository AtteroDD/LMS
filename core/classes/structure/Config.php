<?php

namespace core\structure;

class Config {
	private static $config;

	public static function set($path) {
		if(is_file($path)) {
			self::$config = require $path;
			return true;
		} else {
			return false;
		}
	}

	public static function get($key) {
		if(array_key_exists($key, self::$config)) {
			return self::$config[$key];
		} else {
			return 'error, config key not found';
		}
	}
}