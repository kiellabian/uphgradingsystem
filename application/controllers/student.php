<?php

class Student extends CI_Controller {

  function __construct() {
    parent::__construct();    
    if (!($this->session->userdata('user_id') && $this->session->userdata('user_type') == 'student')) {
      $this->session->set_flashdata('alert', 'You\'re not logged in.');
      redirect('session/index');
    }
    $this->load->model('meta_model', 'meta');
  }

	public function index() {
		$sys = $this->meta->getYearSem();
    $data = array('sys' => $sys);
    $this->load->view('student/index', $data);
	}

  public function year_sem() {
    $year = $_POST['year'];
    if ($year < '0') {
      $this->session->set_flashdata('alert', 'Please choose a school year - sem.');
      redirect('student/index');
    } else {
      $this->session->set_userdata('sys', $year);
      redirect('student/card');
    }
  }

	public function card() {
		$this->load->view('report_card');
	}

}

?>