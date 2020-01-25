<?php

class User {
	private $username;
	private $password;
	private $role = ['ROLE_USER'];

	public function __construct(string $username, string $password) {
		$this->username= $username;
		$this->password = $password;
	}

	public function getUsername(): string {
		return $this->username;
	}

	public function getPassword() {
		return $this->password;
	}
}

?>
