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
			<?php if ($homeroom): ?>
				<h1><?= $homeroom[0]->year_level . ' - ' . $homeroom[0]->section_name ?></h1>
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
			<?php else : ?>
				<h3>You are not an advicer.</h3>
			<?php endif ?>
			

		</div>

		<?= anchor('session/logout', '<div class="logout"></div>'); ?>

	</div>
</body>
</html>