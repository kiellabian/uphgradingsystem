<?php

class Session extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user_model', 'user');
	}

	public function index() {
		$this->load->view('login');
	}

	public function student_login() {
		$this->load->view('student_login');
	}

	public function login_teacher() {
		$user = $this->user->getUser($_POST['username'], $_POST['password'], "teacher");

		print_r($user);

		if ($user) {
			$this->session->set_userdata('user_id', $user[0]->id);
			$this->session->set_userdata('user_type', $user[0]->type);
			redirect('teacher/index');
		} else {
			redirect('session/index');
		}
	}

	public function login_student() {
		$user = $this->user->getUser($_POST['username'], $_POST['password'], "student");

		// print_r($user);

		if ($user) {
			$this->session->set_userdata('user_id', $user[0]->id);
			$this->session->set_userdata('user_type', $user[0]->type);
			redirect('student/index');
		} else {
			redirect('session/login_student');
		}
		
	}

}

?>