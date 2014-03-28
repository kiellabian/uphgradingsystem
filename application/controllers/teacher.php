<?php

class Teacher extends CI_Controller {

	function __construct() {
		parent::__construct();		
		if (!($this->session->userdata('user_id') && $this->session->userdata('user_type') == 'teacher')) {
			$this->session->set_flashdata('alert', 'You\'re not logged in.');
			redirect('session/index');
		}
		$this->load->model('meta_model', 'meta');
	}

	public function index() {
		$sys = $this->meta->getYearSem();

		// echo '<pre>';
		// print_r($sys);
		// echo '</pre>';

		$data = array('sys' => $sys);
		$this->load->view('teacher/index', $data);
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
		$this->session->set_flashdata('notice', 'Attendance fuck!');
		$this->load->view('teacher/attendance');
	}

	public function report_card($student_id) {
		$this->load->view('report_card');
	}

}

?>