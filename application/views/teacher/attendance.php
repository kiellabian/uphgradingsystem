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
				<li><?= anchor('teacher/grade', 'Enter Grades'); ?></li>
				<li class="current"><?= anchor('teacher/homeroom', 'Homeroom'); ?></li>
			</ul>
		</div>

		<div class="main">
			<h2>Lorem, Ipsum</h2>
		
			<?= form_open('teacher/attendance'); ?>
				<div class="table pces">
					<table>
						<tr>
							<td></td>
							<td class="head2">Jun</td>
							<td class="head2">Jul</td>
							<td class="head2">Aug</td>
							<td class="head2">Sep</td>
							<td class="head2">Oct</td>
							<td class="head2">Nov</td>
							<td class="head2">Dec</td>
							<td class="head2">Jan</td>
							<td class="head2">Feb</td>
							<td class="head2">Mar</td>
							<td class="head2">TOTAL</td>
						</tr>
						<tr>
							<td class="head3">No. of School Days</td>
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
							<td><input type="text" disabled></td>
						</tr>
						<tr>
							<td class="head3">No. of Days Present</td>
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
							<td><input type="text" disabled></td>
						</tr>
						<tr>
							<td class="head3">No. of Times Tardy</td>
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
							<td><input type="text" disabled></td>
						</tr>
						<tr>
							<td class="head3">No. of Classes Cut</td>
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
							<td><input type="text" disabled></td>
						</tr>
					</table>
				</div>

				<div class="field">
					<input type="submit" class="left" value="Save">
				</div>

			<?= form_close(); ?>

		</div>

		<?= anchor('session/logout', '<div class="logout"></div>'); ?>

	</div>
</body>
</html>