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
				<li><?= anchor('teacher/grade', 'Enter Grades'); ?></li>
				<li><?= anchor('teacher/homeroom', 'Homeroom'); ?></li>
				<li class="current"><?= anchor('teacher/cards', 'View Report Cards'); ?></li>
			</ul>
		</div>

		<div class="main">
			<h1>8 - Bartlett</h1>
		
			<div class="table">
				<ul class="students">
					<li><?= anchor('teacher/report_card', 'Lorem, Ipsum'); ?></li>
					<li><?= anchor('teacher/report_card', 'Sit, Amet'); ?></li>
					<li><?= anchor('teacher/report_card', 'Zumba, Exhersis'); ?></li>
					<li><?= anchor('teacher/report_card', 'Zz, Zzzz'); ?></li>
				</ul>
			</div>

		</div>

		<?= anchor('session/index', '<div class="logout"></div>'); ?>

	</div>
</body>
</html>