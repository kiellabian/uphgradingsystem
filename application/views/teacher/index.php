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
		<div class="year">
			<?= form_open('teacher/year_sem', array('method'=>'post')); ?>
				<div class="field">
					<select name="year">
						<option value="-1" disabled selected>Chooose Semester</option>
						<?php foreach ($sys as $value) : ?>
							<option value="<?= $value->sys ?>"><?= $value->year . (($value->sem == 1) ? ' 1st' : ' 2nd') . ' Sem' ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="field">
					<input type="submit" value=">>continue">
				</div>
			<?= form_close(); ?>
		</div>

	<?= anchor('session/logout', '<div class="logout"></div>'); ?>

	</div>
</body>
</html>