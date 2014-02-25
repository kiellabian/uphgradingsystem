<?php

class Session extends CI_Controller {

	public function index() {
		$this->load->view('login');
	}

	public function student_login() {
		$this->load->view('student_login');
	}

	public function login_teacher() {
		redirect('teacher/index');
	}

	public function login_student() {
		redirect('student/index');
	}

}

?>