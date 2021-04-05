<?php

namespace core;

class Document {
	public static function addStyle($style) {
		if(is_file($style)) {
			$GLOBALS['styles'][] = $style;
			return true;
		} else {
			return false;
		}
	}

	public static function addScript($script) {
		if(is_file($script)) {
			$GLOBALS['scripts'][] = $script;
			return true;
		} else {
			return false;
		}
	}

	public static function placeScripts($content) {
		if(array_key_exists('scripts', $GLOBALS)) {
			$scripts = '';
			foreach ($GLOBALS['scripts'] as $key) {
				$scripts .= '<script src="'.str_replace(ROOT, '', $key).'"></script>';
			}
			return str_replace('<--scripts-->', $scripts, $content);
		} else {
			return $content;
		}
	}

	public static function placeStyles($content) {
		if(array_key_exists('styles', $GLOBALS)) {
			$styles = '';
			foreach ($GLOBALS['styles'] as $key) {
				$styles .= '<link rel="stylesheet" href="'.str_replace(ROOT, '', $key);
				if($GLOBALS['config']['debugMode']) {
					$styles .= '?'.time();
				}
				$styles .= '">';
			}

			return str_replace('<--styles-->', $styles, $content);
		} else {
			return $content;
		}
	}
}