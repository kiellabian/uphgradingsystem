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
			</ul>
		</div>

		<div class="main">
			<h1>Biology 8</h1>

			<div class="section" id="1">
				<h3 onclick="toggle(1)">8 - Bartlett</h3>
				<?= form_open('teacher/grade_section'); ?>
					<div class="table">
					<table>
						<tr>
							<td></td>
							<td class="head2">1st</td>
							<td class="head2">2nd</td>
							<td class="head2">3rd</td>
							<td class="head2">4th</td>
						</tr>
						<tr>
							<td class="head3">Lorem, Ipsum</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="head3">Sit, Amet</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="head3">Zumba, Exhersis</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="head3">Zz, Zzzz</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
					</table>
					</div>

					<div class="field">
						<input type="submit" class="floatleft" value="Save">
					</div>

				<?= form_close(); ?>
			</div>

		</div>

		<?= anchor('session/index', '<div class="logout"></div>'); ?>

	</div>

	<script type="text/javascript">
		var sections = document.getElementsByClassName("section");
		var flags = new Array();

		for (var i = 0; i < sections.length; i++) {
			flags[i] = false;
		};

		function toggle(id) {

		}
	</script>

</body>
</html>