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
				<li><?= anchor('teacher/cards', 'View Report Cards'); ?></li>
			</ul>
		</div>

		<div class="main">
			<h1>8 - Bartlett</h1>
		
			<div class="table">
				<table>
					<tr>
						<td class="head4">Lorem, Ipsum</td>
						<td><?= anchor('teacher/pces', '<button>PCES</button>'); ?></td>
						<td><?= anchor('teacher/attendance', '<button>Attendance</button>'); ?></td>
					</tr>
					<tr>
						<td class="head4">Sit, Amet</td>
						<td><?= anchor('teacher/pces', '<button>PCES</button>'); ?></td>
						<td><?= anchor('teacher/attendance', '<button>Attendance</button>'); ?></td>
					</tr>
					<tr>
						<td class="head4">Zumba, Exhersis</td>
						<td><?= anchor('teacher/pces', '<button>PCES</button>'); ?></td>
						<td><?= anchor('teacher/attendance', '<button>Attendance</button>'); ?></td>
					</tr>
					<tr>
						<td class="head4">Zz, Zzzz</td>
						<td><?= anchor('teacher/pces', '<button>PCES</button>'); ?></td>
						<td><?= anchor('teacher/attendance', '<button>Attendance</button>'); ?></td>
					</tr>
				</table>
			</div>

		</div>

		<?= anchor('session/index', '<div class="logout"></div>'); ?>

	</div>
</body>
</html>