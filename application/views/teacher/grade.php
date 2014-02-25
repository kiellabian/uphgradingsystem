<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/stylesheets/fonts.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/stylesheets/overall.css'; ?>">
	<title>UP HIGH Grading System</title>
</head>
<body>
	<div class="left"></div>
	<div class="content">
		<?php $this->load->view('heading'); ?>
		<div class="side">
			<ul>
				<li class="current"><?= anchor('teacher/grade', 'Enter Grades'); ?></li>
				<li><?= anchor('teacher/homeroom', 'Homeroom'); ?></li>
				<li><?= anchor('teacher/cards', 'View Report Cards'); ?></li>
			</ul>
		</div>

		<div class="main">
			<ul class="sections">
				<li><?= anchor('teacher/grade_section', '8 - Bartlett'); ?></li>
				<li><?= anchor('teacher/grade_section', '8 - Villamor'); ?></li>
				<li><?= anchor('teacher/grade_section', '9 - Paterno'); ?></li>
				<li><?= anchor('teacher/grade_section', '9 - Asiong'); ?></li>
			</ul>
		</div>

		<?= anchor('session/index', '<div class="logout"></div>'); ?>

	</div>
</body>
</html>