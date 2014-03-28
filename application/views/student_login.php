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

		<?= form_open('session/login_student', 'POST'); ?>
			<div class="login-box">
				<div class="field">
					<label>student no.</label>
					<input type="text" name="username" maxlength="2" required>
					<label class="dash"> - </label>
					<input type="text" name="username" maxlength="4" required>
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

		<?= anchor('session/index', 'login as teacher', array('class'=>'login')); ?>
	</div>
</body>
</html>