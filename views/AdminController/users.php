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
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	<link rel="stylesheet" type="text/css" href="../public/css/board.css">
</head>
<body>
	<div class="boardcontainer">
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Username</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user): ?>
					<tr>
						<th><?= $user->getId(); ?></th>
						<td><?= $user->getUsername(); ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>

