<?php

namespace core\structure;

class Document {
	//добавление стиля со смещением
	public static function addStyle($style) {
		$style = str_replace('\\', '/', $style);
		if(is_file($style)) {
			$GLOBALS['styles'][] = $style;
			return true;
		} else {
			return false;
		}
	}

	//добавление скрипта со смещением
	public static function addScript($script) {
		$script = str_replace('\\', '/', $script);
		if(is_file($script)) {
			$GLOBALS['scripts'][] = $script;
			return true;
		} else {
			return false;
		}
	}

	//добавить изображение(через php)
	public static function addImage($image, $alt = false, $class = false) {
		$image = str_replace('\\', '/', $image);
		if(is_file($image)) {
			$img = '<img src="'.str_replace(ROOT, '', $image).'"';
			if($class) {
				$img .= '" class="'.$class.'"';
			}
			if($alt) {
				$img .= '" alt="'.$alt.'"';
			}
			$img .= '>';

			echo $img;
			return true;
		} else {
			return false;
		}
	}

	//размещение скриптов
	public static function placeScripts($content) {
		if(array_key_exists('scripts', $GLOBALS)) {
			$scripts = '';
			foreach ($GLOBALS['scripts'] as $key) {
				$scripts .= '<script src="'.str_replace(ROOT, '', $key).'"></script>';
			}
			return str_replace('<--scripts-->', $scripts, $content);
		} else {
			return str_replace('<--scripts-->', '', $content);
		}
	}

	//размещение стилей
	public static function placeStyles($content) {
		if(array_key_exists('styles', $GLOBALS)) {
			$styles = '';
			foreach ($GLOBALS['styles'] as $key) {
				$styles .= '<link rel="stylesheet" href="'.str_replace(ROOT, '', $key);
				if(config('debug_mode')) {
					$styles .= '?'.time();
				}
				$styles .= '">';
			}

			return str_replace('<--styles-->', $styles, $content);
		} else {
			return str_replace('<--styles-->', '', $content);
		}
	}
}