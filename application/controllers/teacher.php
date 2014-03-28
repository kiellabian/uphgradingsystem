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
		$subject = $this->teacher->getSubject($subject_id);
		$sections = $this->teacher->getSubjectSections($subject_id, $this->session->userdata('user_id'), $this->session->userdata('sys'));
		$students = array();
		$grade = array();
		foreach ($sections as $key => $value) {
			$students[$key] = $this->teacher->getSectionStudents($value->section_id, $this->session->userdata('sys'));
			foreach ($students[$key] as $v) {
				$grade[$v->id] = $this->teacher->getGrades($v->id, $subject_id, $this->session->userdata('sys'));
			}
		}

		// echo '<pre>';
		// print_r($students);
		// echo '</pre>';

		$data = array('subject' => $subject, 'sections' => $sections, 'students' => $students);
		$this->load->view('teacher/grade_section', $data);
	}

	public function save_grade() {
		
	}

	public function homeroom() {
		$homeroom = $this->teacher->getHomeroom($this->session->userdata('user_id'), $this->session->userdata('sys'));
		$students = array();
		if ($homeroom) {
			$students = $this->teacher->getSectionStudents($homeroom[0]->section_id, $this->session->userdata('sys'));
		}		
		$data = array('homeroom' => $homeroom, 'students' => $students);
		$this->load->view('teacher/homeroom', $data);
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