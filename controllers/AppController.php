<?php

declare(strict_types=1);

class AppController {
	private $request;

	public function __construct() {
		$this->request = $_SERVER['REQUEST_METHOD'];
	}

	protected function isGet(): bool {
		return $this->request === 'GET';
	}

	protected function render() {
		die('Rendering not yet implemented');
	}
}

?>
