<?php

require_once('AppController.php');
require_once __DIR__.'/../models/Podcast.php';

class BoardController extends AppController {

	public function getLatestPodcasts()
	{
		$podcast1 = new Podcast('cdisc.png');

		$data = [$podcast1];
		$this->render('board', ['podcasts' => $data]);
	}
}

?>
