<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/stylesheets/fonts.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/stylesheets/overall.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/stylesheets/login.css'; ?>">
	<title>UP HIGH Grading System</title>
</head>
<body onload="showNotif()">
	<div class="left"></div>
	<div class="content">
		<?php $this->load->view('notif.php'); ?>

		<h1>UP HIGH Grading System</h1>

		<?= form_open('session/login_teacher', 'POST'); ?>
			<div class="login-box">
				<div class="field">
					<label>username</label>
					<input type="text" name="username" required>
				</div>
				<div class="field">
					<label>password</label>
					<input type="password" name="password" required>
				</div>
				<div class="field">
					<input type="submit" value="login">
				</div>
			</div>
		<?= form_close(); ?>

		<?= anchor('session/student_login', 'login as student', array('class'=>'login')); ?>
	</div>
</body>
</html>