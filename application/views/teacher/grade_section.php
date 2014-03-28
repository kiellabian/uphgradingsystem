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
			<h1><?= $subject[0]->subject_name ?></h1>

			<?php foreach ($sections as $key => $value) : ?>
				<div class="section" id="<?= $key ?>">
				<h3 onclick="toggle(<?= $key ?>)"><?= $value->year_level . ' - ' . $value->section_name ?></h3>
				<?php if (sizeof($students[$key]) > 0): ?>
				<?= form_open('teacher/save_grade'); ?>
					<div class="table">
					<table>
						<tr>
							<td></td>
							<td class="head2">1st</td>
							<td class="head2">2nd</td>
							<td class="head2">3rd</td>
							<td class="head2">4th</td>
						</tr>
						
						<?php foreach ($students[$key] as $v) : ?>
							<tr>
								<td class="head3"><?= $v->last_name .', '. $v->first_name ?></td>
								<td><input type="text" name="grade[<?= $v->student_id ?>][0]"></td>
								<td><input type="text" name="grade[<?= $v->student_id ?>][1]"></td>
								<td><input type="text" name="grade[<?= $v->student_id ?>][2]"></td>
								<td><input type="text" name="grade[<?= $v->student_id ?>][3]"></td>
							</tr>
						<?php endforeach ?>
						
					</table>
					</div>

					<div class="field">
						<input type="submit" class="floatleft" value="Save">
					</div>

				<?= form_close(); ?>
				<?php else : ?>
					<br><h3>This section is not composed of any student.</h3>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>

		</div>

		<?= anchor('session/logout', '<div class="logout"></div>'); ?>

	</div>

	<script type="text/javascript">
		var sections = document.getElementsByClassName("section");
		var flags = new Array();

		for (var i = 0; i < sections.length; i++) {
			flags[i] = false;
		};

		function toggle(id) {
			if (flags[id]) {
				flags[id] = !flags[id];
				sections[id].style.height = "60px";
			} else {
				flags[id] = !flags[id];
				sections[id].style.height = "auto";
			}
		}
	</script>

</body>
</html>