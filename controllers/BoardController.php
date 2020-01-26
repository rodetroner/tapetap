<?php

require_once('AppController.php');
require_once __DIR__.'/../models/Podcast.php';
require_once __DIR__.'/../Database.php';

class BoardController extends AppController {

	public function getLatestPodcasts()
	{
		$database = new Database();
		$database->connect();

		$podcast1 = new Podcast(1, 'History Podcast', 'Best out there', 1);
		$podcast2 = new Podcast(2, 'Science Podcast', 'Best out there', 1);
		$podcast3 = new Podcast(3, 'Comedy Podcast', 'Best out there', 1);

		$data = [$podcast1, $podcast2, $podcast3];
		$this->render('board', ['podcasts' => $data]);
	}
}

?>
