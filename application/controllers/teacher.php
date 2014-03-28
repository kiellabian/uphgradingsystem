<?php

class Teacher extends CI_Controller {

	function __construct() {
		parent::__construct();		
		if (!($this->session->userdata('user_id') && $this->session->userdata('user_type') == 'teacher')) {
			$this->session->set_flashdata('alert', 'You\'re not logged in.');
			redirect('session/index');
		}
		$this->load->model('teacher_model', 'teacher');
		$this->load->model('meta_model', 'meta');
	}

	public function index() {
		$sys = $this->meta->getYearSem();
		$data = array('sys' => $sys);
		$this->load->view('teacher/index', $data);
	}

	public function year_sem() {
		$year = $_POST['year'];
		if ($year < '0') {
			$this->session->set_flashdata('alert', 'Please choose a school year - sem.');
			redirect('teacher/index');
		} else {
			$this->session->set_userdata('sys', $year);
			redirect('teacher/grade');
		}
	}

	public function grade() {
		$subjects = $this->teacher->getSubjects($this->session->userdata('user_id'), $this->session->userdata('sys'));
		$data = array('subjects' => $subjects);
		$this->load->view('teacher/grade', $data);
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