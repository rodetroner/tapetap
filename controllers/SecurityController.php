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

			$_SESSION["id"] = $user->getUsername();
			$_SESSION["role"] = $user->getRole();

			$url = "http://$_SERVER[HTTP_HOST]/";
			header("Location: {$url}?page=board");
			return;
		}

		$this->render('login');
	}

	public function logout() {
		session_unset();
		session_destroy();

		$this->render('login', ['messages' => ['Logged out']]);
	}
}
