<?php

require_once 'controllers/BoardController.php';
require_once 'controllers/SecurityController.php';
require_once 'controllers/AdminController.php';

class Routing {
	private $routes = [];

	public function __construct() {
		$this->routes = [
			'board' => [
				'controller' => 'BoardController',
				'action' => 'getLatestPodcasts'
			],
			'login' => [
                'controller' => 'SecurityController',
                'action' => 'login'
            ],
			'logout' => [
				'controller' => 'SecurityController',
				'action' => 'logout'
			],
			'users' => [
				'controller' => 'AdminController',
				'action' => 'users'
			]
		];
	}

	public function run() {
		$page = isset($_GET['page']) ? $_GET['page'] : 'login';

		if (isset($this->routes[$page])) {
			$controller = $this->routes[$page]['controller'];
			$action = $this->routes[$page]['action'];

			$object = new $controller;
			$object->$action();
		}
	}
}

?>

