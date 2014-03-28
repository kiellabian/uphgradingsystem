<?php

class Session extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user_model', 'user');
		$this->load->model('teacher_model', 'teacher');
	}

	public function index() {
		if ($this->session->userdata('user_type')) {
			$this->session->set_flashdata('alert', 'You are already logged in.');
			if ($this->session->userdata('user_type') == 'teacher') {
				redirect('teacher/index');
			}	else if ($this->session->userdata('user_type') == 'admin') {
				redirect('admin/index');
			} else {
				redirect('student/index');
			}
		} else {
			$this->load->view('login');
		}
	}

	public function student_login() {
		if ($this->session->userdata('user_type')) {
			$this->session->set_flashdata('alert', 'You are already logged in.');
			if ($this->session->userdata('user_type') == 'teacher') {
				redirect('teacher/index');
			}	else if ($this->session->userdata('user_type') == 'admin') {
				redirect('admin/index');
			} else {
				redirect('student/index');
			}
		} else {
			$this->load->view('student_login');
		}
	}

	public function login_teacher() {
		$teacher = $this->user->getUser($_POST['username'], $_POST['password'], 'teacher');
		$admin = $this->user->getUser($_POST['username'], $_POST['password'], 'admin');

		if ($teacher || $admin) {
			$user = ($teacher) ? $teacher : $admin;

			$this->session->set_userdata('user_id', $user[0]->id);
			$this->session->set_userdata('user_type', $user[0]->type);

			if ($teacher) {
				$t = $this->teacher->getTeacher($this->session->userdata('user_id'));
				$this->session->set_flashdata('notice', 'Welcome, ' . $t[0]->first_name . ' ' . $t[0]->last_name);
				redirect('teacher/index');	
			} else {
				redirect('admin/index');
			}
			
		} else {
			$this->session->set_flashdata('alert', 'Incorrect username or password.');
			redirect('session/index');
		}
	}

	public function login_student() {
		$user = $this->user->getUser($_POST['username'], $_POST['password'], 'student');

		if ($user) {
			$this->session->set_userdata('user_id', $user[0]->id);
			$this->session->set_userdata('user_type', $user[0]->type);
			$this->session->set_flashdata('notice', $user[0]->username);
			redirect('student/index');
		} else {
			redirect('session/student_login');
		}
	}

	public function logout() {
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_type');
		$this->session->unset_userdata('sys');
		redirect('session/index');
	}

}

?>