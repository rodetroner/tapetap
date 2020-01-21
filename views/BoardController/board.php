<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../public/css/board.css" />
	<link rel="stylesheet" type="text/css" href="../public/css/style.css" />
</head>
<body>
	<div class="boardcontainer">
		<div class="nav">
			<div class="boardlogo">
				<img src="../public/img/logo-transparent.svg">
			</div>
			<div class="navitem">
				HOME
			</div>
			<div class="navitem">
				QUEUE
			</div>
			<div class="navitem">
				SUBSCRIBED
			</div>
			<div class="navitem">
				EXPLORE
			</div>
			<div class="navitem">
				SEARCH
			</div>
			<div class="navitem">
				SETTINGS
			</div>
			<div class="controls">
			</div>
		</div>
		<div class="board">
			<?php foreach($podcasts as $podcast): ?>
				<div class="item">
					<div class="art">
					</div>
					<div class="label">
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>

