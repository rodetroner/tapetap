<?php
	if (!isset($_SESSION['id']) and !isset($_SESSION['role'])) {
		die("Session expired");
	}

	if (!in_array('ROLE_USER', $_SESSION['role'])) {
		die("Access denied");
	}
?>

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
				<a href="?page=board">HOME</a>
			</div>
			<div class="navitem">
				QUEUE
			</div>
			<div class="navitem">
				SUBSCRIBED
			</div>
			<div class="navitem">
				<a href="?page=logout">LOGOUT</a>
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

