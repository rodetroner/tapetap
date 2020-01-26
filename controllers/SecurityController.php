<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class SecurityController extends AppController {

	public function login() {

		$userRepository = new UserRepository();

		if ($this->isPost()) {
			$username= $_POST['username'];
			$password = $_POST['password'];

			$user = $userRepository->getUser($username);

			if (!$user) {
				$this->render('login', ['messages' => ['User with this name does not exist.']]);
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
