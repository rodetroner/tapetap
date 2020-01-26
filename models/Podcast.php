<?php

class Podcast {
	private $id;
	private $title;
	private $description;
	private $id_user;

	public function __construct(int $id=null, string $title, string $description, int $id_user=null) {
		$this->id = $id;
		$this->title = $title;
		$this->description = $description;
		$this->id_user = $id_user;
	}

	public function getId(): int {
		return $this->id;
	}

	public function getTitle(): string {
		return $this->title;
	}

	public function getDescription(): string {
		return $this->description;
	}

	public function getIdUser(): int {
		return $this->id_user;
	}

}

?>
