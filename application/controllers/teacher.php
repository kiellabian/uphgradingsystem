<?php

class Teacher extends CI_Controller {

	public function index() {
		$this->load->view('teacher/index');
	}

	public function grade() {
		$this->load->view('teacher/grade');
	}

	public function grade_section($subject_id) {
		$this->load->view('teacher/grade_section');
	}

	public function homeroom() {
		$this->load->view('teacher/homeroom');
	}

	public function pces($student_id) {
		$this->load->view('teacher/pces');
	}

	public function attendance($student_id) {
		$this->load->view('teacher/attendance');
	}

	public function report_card($student_id) {
		$this->load->view('report_card');
	}

}

?>