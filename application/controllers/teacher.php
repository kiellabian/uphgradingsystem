<?php

class Teacher extends CI_Controller {

	public function index() {
		$this->load->view('teacher/index');
	}

	public function grade() {
		$this->load->view('teacher/grade');
	}

	public function grade_section() {
		$this->load->view('teacher/grade_section');
	}

	public function homeroom() {
		$this->load->view('teacher/homeroom');
	}

	public function pces() {
		$this->load->view('teacher/pces');
	}

	public function attendance() {
		$this->load->view('teacher/attendance');
	}

	public function cards() {
		$this->load->view('teacher/cards');
	}

	public function report_card() {
		$this->load->view('report_card');
	}

}

?>