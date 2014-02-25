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
				<li><?= anchor('admin/manage', 'Manage Sections'); ?></li>
				<li><?= anchor('admin/grade', 'Enter Grades'); ?></li>
				<li><?= anchor('admin/homeroom', 'Homeroom'); ?></li>
				<li class="current"><?= anchor('admin/cards', 'View Report Cards'); ?></li>
			</ul>
		</div>

		<div class="main">
			<h1>8 - Bartlett</h1>
		
			<div class="table">
				<ul class="students">
					<li><?= anchor('admin/report_card', 'Lorem, Ipsum'); ?></li>
					<li><?= anchor('admin/report_card', 'Sit, Amet'); ?></li>
					<li><?= anchor('admin/report_card', 'Zumba, Exhersis'); ?></li>
					<li><?= anchor('admin/report_card', 'Zz, Zzzz'); ?></li>
				</ul>
			</div>

			<h1>8 - Villamor</h1>
		
			<div class="table">
				<ul class="students">
					<li><?= anchor('admin/report_card', 'Lorem, Ipsum'); ?></li>
					<li><?= anchor('admin/report_card', 'Sit, Amet'); ?></li>
					<li><?= anchor('admin/report_card', 'Zumba, Exhersis'); ?></li>
					<li><?= anchor('admin/report_card', 'Zz, Zzzz'); ?></li>
				</ul>
			</div>

			<h1>9 - Paterno</h1>
		
			<div class="table">
				<ul class="students">
					<li><?= anchor('admin/report_card', 'Lorem, Ipsum'); ?></li>
					<li><?= anchor('admin/report_card', 'Sit, Amet'); ?></li>
					<li><?= anchor('admin/report_card', 'Zumba, Exhersis'); ?></li>
					<li><?= anchor('admin/report_card', 'Zz, Zzzz'); ?></li>
				</ul>
			</div>

			<h1>9 - Paterno</h1>
		
			<div class="table">
				<ul class="students">
					<li><?= anchor('admin/report_card', 'Lorem, Ipsum'); ?></li>
					<li><?= anchor('admin/report_card', 'Sit, Amet'); ?></li>
					<li><?= anchor('admin/report_card', 'Zumba, Exhersis'); ?></li>
					<li><?= anchor('admin/report_card', 'Zz, Zzzz'); ?></li>
				</ul>
			</div>

		</div>

		<?= anchor('session/index', '<div class="logout"></div>'); ?>

	</div>
</body>
</html>