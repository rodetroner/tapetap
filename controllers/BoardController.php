<?php

require_once('AppController.php');
require_once __DIR__.'/../models/Podcast.php';
require_once __DIR__.'/../Database.php';

class BoardController extends AppController {

	public function getLatestPodcasts()
	{
		$database = new Database();
		$database->connect();

		$podcast1 = new Podcast();
		$podcast2 = new Podcast();
		$podcast3 = new Podcast();

		$data = [$podcast1, $podcast2, $podcast3];
		$this->render('board', ['podcasts' => $data]);
	}
}

?>
