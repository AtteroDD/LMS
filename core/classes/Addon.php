<?php

namespace core;

class Addon {

	public static function add($name, $template = 'default') {
		if(is_file(ADDON.'/'.$name.'/'.$template.'/main.php')) {
			require(ADDON.'/'.$name.'/'.$template.'/main.php');
		} else {
			echo "Не удалось обнаружить аддон ".$name;
		}
	}
}