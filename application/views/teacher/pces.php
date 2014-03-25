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
				<li class="current"><?= anchor('teacher/homeroom', 'Homeroom'); ?></li>
			</ul>
		</div>

		<div class="main">
			<h2>Lorem, Ipsum</h2>
		
			<?= form_open('teacher/pces'); ?>
				<div class="table pces">
					<table>
						<tr>
							<td></td>
							<td class="head2">1st</td>
							<td class="head2">2nd</td>
							<td class="head2">3rd</td>
							<td class="head2">4th</td>
						</tr>
						<tr>
							<td class="head3">Manners</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="head3">Appearance</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="head3">Dependability</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="head3">Cooperation</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="head3">Attendance</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="head3">AVERAGE</td>
							<td><input type="text" disabled></td>
							<td><input type="text" disabled></td>
							<td><input type="text" disabled></td>
							<td><input type="text" disabled></td>
						</tr>
						<tr></tr>
						<tr>
							<td class="head3">Initiative & Resourcefulness</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="head3">Leadership</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td class="head3">AVERAGE</td>
							<td><input type="text" disabled></td>
							<td><input type="text" disabled></td>
							<td><input type="text" disabled></td>
							<td><input type="text" disabled></td>
						</tr>
					</table>
				</div>

				<div class="field">
					<input type="submit" class="left" value="Save">
				</div>

			<?= form_close(); ?>

		</div>

		<?= anchor('session/index', '<div class="logout"></div>'); ?>

	</div>
</body>
</html>