<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/stylesheets/fonts.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/stylesheets/overall.css'; ?>">
	<title>UP HIGH Grading System</title>
</head>
<body onload="showNotif()">
	<div class="left"></div>
	<div class="content">
		<?php $this->load->view('notif.php'); ?>
		<?php $this->load->view('heading'); ?>
		<div class="side">
			<ul>
				<li class="current"><?= anchor('teacher/grade', 'Enter Grades'); ?></li>
				<li><?= anchor('teacher/homeroom', 'Homeroom'); ?></li>
			</ul>
		</div>

		<div class="main">
			<ul class="sections">
				<li><?= anchor('teacher/grade_section/1', 'Biology 8'); ?></li>
				<li><?= anchor('teacher/grade_section/2', 'Mathematics 7'); ?></li>
				<li><?= anchor('teacher/grade_section/3', 'Values Education 666'); ?></li>
				<li><?= anchor('teacher/grade_section/4', 'Pornography XXX'); ?></li>
			</ul>
		</div>

		<?= anchor('session/logout', '<div class="logout"></div>'); ?>

	</div>
</body>
</html>