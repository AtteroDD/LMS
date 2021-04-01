<?php
namespace core;

class Router {
	//таблица маршрутов
	protected static $routes = [];
	//текущий маршрут
	protected static $route = [];

	//добавление маршрута - в resources/routes.php
	public static function add($regexp, $route = []) {
		//обработка регулярного выражения из сокращенной записи
		$regexp = str_replace('<', '(?P<', $regexp);
		$regexp = str_replace('>', ')', $regexp);
		$regexp = str_replace(':', '>', $regexp);
		self::$routes[$regexp] = $route;
		return true;
	}

	//получение текущего маршрута
	public static function get() {
		return self::$route;
	}

	//получение таблицы маршрутов
	public static function getAll() {
		return self::$routes;
	}

	//поиск текущего запроса в таблице маршрутов
	private static function matchRoute($url) {
		foreach(self::$routes as $pattern => $route) {
			if(preg_match("#$pattern#i", $url, $matches)) {
				foreach ($matches as $key => $value) {
					if(is_string($key)) {
						$route[$key] = $value;
					}
				}
				if(!isset($route['action'])) {
					$route['action'] = 'index';
				}
				self::$route = $route;
				return true;
			}
		}
		return false;
	}

	//переход по маршруту
	public static function dispatch($url) {
		if(self::matchRoute($url)) {
			$controller = 'controller\\'.self::format('controller', self::$route['controller']);
			if(class_exists($controller)) {
				$object = new $controller;
				$action = self::format('action', self::$route['action']).'Action';
				if(method_exists($object, $action)) {
					$object->$action();
				} else {
					echo "action контроллера: ".$controller." не найден";
				}
			} else {
				echo "контроллер: '".$controller."' не найден";
			}
		} else {
			http_response_code(404);
			echo "404";
		}
	}

	//форматирование controller и action
	private static function format($type, $string) {
		switch ($type) {
			case 'controller':
				$string = str_replace('-', ' ', $string);
				$string = ucwords($string);
				$string = str_replace(' ', '', $string);
				return $string;
				break;
			case 'action':
				$string = str_replace('-', ' ', $string);
				$string = ucwords($string);
				$string = str_replace(' ', '', $string);
				$string = lcfirst($string);
				return $string;
				break;
			default:
				echo "Не определен тип форматирования или строка форматирования пуста";
				break;
		}
	}
}