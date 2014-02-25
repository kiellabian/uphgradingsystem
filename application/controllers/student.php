<?php

class Student extends CI_Controller {

	public function index() {
		$this->load->view('student/index');
	}

	public function card() {
		$this->load->view('report_card');
	}

}

?>