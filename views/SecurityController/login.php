<!DOCTYPE html>
<html>
<head>
	<link rel="Stylesheet" type="text/css" href="../public/css/style.css" />
</head>
<body>
<div class="container">
	<div class="logo">
		<img src="../public/img/logo-transparent.svg">
	</div>
	<form action="?page=login" method="POST">
		<div class="messages">
			<?php
				if (isset($messages)) {
					foreach($messages as $message) {
						echo $message;
					}
				}
			?>
		</div>
		<div class="formlinecontainer">
			<label for="username">USERNAME</label>
			<input name="username" type="text">
		</div>
		<div class="formlinecontainer">
			<label for="password">PASSWORD</label>
			<input name="password" type="password">
		</div>
		<input type="submit" value="LOG IN">
	</form>
</div>
</body>
</html>

