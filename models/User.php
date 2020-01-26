<?php

class User {
	private $id;
	private $username;
	private $password;
	private $role = ['ROLE_USER'];

	public function __construct(int $id = null, string $username, string $password) {
		$this->id = $id;
		$this->username= $username;
		$this->password = $password;
	}

	public function getId(): int {
		return $this->id;
	}

	public function getUsername(): string {
		return $this->username;
	}

	public function getPassword(): string {
		return $this->password;
	}

	public function getRole(): array {
		return $this->role;
	}
}

?>
