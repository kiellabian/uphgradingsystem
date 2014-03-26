<?php
	class user_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}


		function getUser($user, $pass, $type) {
			$pass = addslashes($pass);
			$query = $this->db->query("SELECT * FROM users WHERE password = '$pass' AND username = '$user' AND type = '$type'");
			return $query->result();
		}

		
	}
?>