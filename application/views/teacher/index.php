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
		<div class="year">
			<?= form_open('teacher/grade', array('method'=>'post')); ?>
				<div class="field">
					<select name="year">
						<option disabled selected>Chooose School Year</option>
						<option>2011 - 2012</option>
						<option>2012 - 2013</option>
						<option>2013 - 2014</option>
					</select>
				</div>
				<div class="field">
					<input type="submit" value=">>continue">
				</div>
			<?= form_close(); ?>
		</div>

	<?= anchor('session/index', '<div class="logout"></div>'); ?>

	</div>
</body>
</html>