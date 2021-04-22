<?php
//автозагрузка классов
spl_autoload_register(function($class){
	$file = str_replace('\\', '/', $class);
	if(is_file(ROOT.'/'.$file.'.php')) {
		require_once(ROOT.'/'.$file.'.php');
	} else {
		$eFile = explode('/', $file);
		$prefix = $eFile[0];
		unset($eFile[0]);

		$file = implode('/', $eFile);
		switch ($prefix) {
			case 'controller':
				$file = APP.'/controllers/'.$file.'.php'; 
				break;
			case 'model':
				$file = APP.'/models/'.$file.'.php'; 
				break;
			case 'addon':
				$file = APP.'/addons/'.$file.'.php'; 
				break;
			case 'core':
				$file = CORE.'/classes/'.$file.'.php'; 
				break;
		}
		if(file_exists($file)) {
			require_once $file;
		}
	}
});