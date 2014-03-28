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
			<h1>8 - Bartlett</h1>
		
			<div class="table">
				<table>
					<?php foreach ($students as $value) : ?>
						<tr>
							<td class="head4"><?= $value->last_name . ', ' . $value->first_name ?></td>
							<td><?= anchor('teacher/pces/'.$value->student_id, '<button>PCES</button>'); ?></td>
							<td><?= anchor('teacher/attendance/'.$value->student_id, '<button>Attendance</button>'); ?></td>
							<td><?= anchor('teacher/report_card/'.$value->student_id, '<button>Report Card</button>'); ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>

		</div>

		<?= anchor('session/logout', '<div class="logout"></div>'); ?>

	</div>
</body>
</html>