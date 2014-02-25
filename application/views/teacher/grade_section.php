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
				<li><?= anchor('teacher/cards', 'View Report Cards'); ?></li>
			</ul>
		</div>

		<div class="main">
			<h1>8 - Bartlett</h1>
		
			<?= form_open('teacher/grade_section'); ?>
				<div class="table">
				<table>
					<tr>
						<td></td>
						<td colspan="4" class="head1">Science 8</td>
						<td colspan="4" class="head1">Mathematics 8</td>
						<td colspan="4" class="head1">English 8</td>
					</tr>
					<tr>
						<td></td>
						<td class="head2">1st</td>
						<td class="head2">2nd</td>
						<td class="head2">3rd</td>
						<td class="head2">4th</td>
						<td class="head2">1st</td>
						<td class="head2">2nd</td>
						<td class="head2">3rd</td>
						<td class="head2">4th</td>
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
						<td><input type="text"></td>
						<td><input type="text"></td>
						<td><input type="text"></td>
						<td><input type="text"></td>
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
						<td><input type="text"></td>
						<td><input type="text"></td>
						<td><input type="text"></td>
						<td><input type="text"></td>
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
						<td><input type="text"></td>
						<td><input type="text"></td>
						<td><input type="text"></td>
						<td><input type="text"></td>
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
						<td><input type="text"></td>
						<td><input type="text"></td>
						<td><input type="text"></td>
						<td><input type="text"></td>
						<td><input type="text"></td>
						<td><input type="text"></td>
						<td><input type="text"></td>
						<td><input type="text"></td>
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