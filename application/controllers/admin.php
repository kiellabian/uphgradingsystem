<?php

class Admin extends CI_Controller {

	public function index() {
		$this->load->view('admin/index');
	}

	public function manage() {
		$this->load->view('admin/manage');
	}

	public function grade() {
		$this->load->view('admin/grade');
	}

	public function grade_section() {
		$this->load->view('admin/grade_section');
	}

	public function homeroom() {
		$this->load->view('admin/homeroom');
	}

	public function pces() {
		$this->load->view('admin/pces');
	}

	public function attendance() {
		$this->load->view('admin/attendance');
	}

	public function cards() {
		$this->load->view('admin/cards');
	}

	public function report_card() {
		$this->load->view('report_card');
	}

}

?>