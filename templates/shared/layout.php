<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Password manager - <?= $this->e($title) ?></title>

	<link rel="stylesheet" type="text/css" href="./static/main.css">
</head>
<body>

	<main role="main">
		<h1>
			<?= $this->e($title) ?>
		</h1>

		<hr />

		<?php if(message()): ?>
			<p>
				<?= $this->e(message()) ?>
			</p>

			<?php del_message(); ?>
		<?php endif; ?>

		<?= $this->section('content') ?>
	</main>

</body>
</html>