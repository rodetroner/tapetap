<?php

require_once "Repository.php";
require_once __DIR__ . '/../models/User.php';

class UserRepository extends Repository {

	public function getUser(string $username): ?User
	{
		$stmt = $this->database->connect()->prepare(
			'SELECT * FROM users WHERE username = :username'
		);
		$stmt->bindParam(':username', $username, PDO::PARAM_STR);
		$stmt->execute();

		$user = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($user == false) {
			return null;
		}

		return new User(
			$user['id'],
			$user['username'],
			$user['password']
		);
	}

	public function getUsers(): array {
		$result = [];
		$stmt = $this->database->connect()->prepare(
			'SELECT * FROM users');
		$stmt->execute();
		$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

		foreach ($users as $user) {
			$result[] = new User(
				$user['id'],
				$user['username'],
				$user['password']
			);
		}

		return $result;
	}
}
