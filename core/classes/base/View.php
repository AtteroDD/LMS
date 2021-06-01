<?php

namespace core\base;

class View {
	public $route;
	public $view;
	public $template;

	public function __construct($route, $check, $template = '', $view = '') {
		$this->route = $route;
		$this->template = $template ?: config('default_template');
		if($view === false) {
			$this-> view = false;
		} else {
			$this->view = $view;
		}
	}

	public function render($vars) {
		$view_path = VIEW.'/'.$this->route['controller'].'/'.$this->view.'.php';
		$template_path = TEMPLATE.'/'.$this->template;
		$GLOBALS['vars'] = $vars;
		ob_start();
		if(is_file($view_path)) {
			if(is_file($template_path.'/header.php') and is_file($template_path.'/footer.php')) {
				require $template_path.'/header.php';
				require $view_path;
				require $template_path.'/footer.php';
			} else {
				echo \core\Router::error('template');
			}
		} else {
			echo \core\Router::error('view', $view_path);
		}
		$content = ob_get_clean();

		if ($this->view !== false) {
			$content = \core\structure\Document::placeStyles($content);
			$content = \core\structure\Document::placeScripts($content);
			echo $content;
		}
	}
}