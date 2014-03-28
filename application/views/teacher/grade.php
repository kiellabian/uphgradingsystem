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
				<?php if (sizeof($subjects) == 0): ?>
					<h3>You are not yet assigned to any subject.</h3>
				<?php endif; ?>
				<?php foreach ($subjects as $value) : ?>
					<li><?= anchor('teacher/grade_section/'.$value->id, $value->subject_name); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>

		<?= anchor('session/logout', '<div class="logout"></div>'); ?>

	</div>
</body>
</html>