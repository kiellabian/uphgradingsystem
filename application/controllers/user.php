<?php

class User extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if ($this->session->userdata('user_type') != "admin") {
      redirect('session/index');
    }
  }

  

}

?>