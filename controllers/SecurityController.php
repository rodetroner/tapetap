<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';

class SecurityController extends AppController {

	public function login() {
		$user = new User('a', 'a');

		if ($this->isPost()) {
			$username= $_POST['username'];
			$password = $_POST['password'];

			if ($user->getUsername() !== $username) {
				$this->render('login', ['messages' => ['User with name does not exist.']]);
				return;
			}

			if ($user->getPassword() !== $password) {
				$this->render('login', ['messages' => ['Wrong password!']]);
				return;
			}

			$url = "http://$_SERVER[HTTP_HOST]/";
			header("Location: {$url}?page=board");
		}

		$this->render('login');
	}
}
