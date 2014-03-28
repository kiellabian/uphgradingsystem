<?php
	class user_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}

		function getUser($user, $pass, $type) {
			$user = addslashes($user);
			$pass = addslashes($pass);
			$type = addslashes($type);
			$query = $this->db->query("SELECT * FROM users WHERE password = '$pass' AND username = '$user' AND type = '$type'");
			
			return $query->result();
		}

		
	}
?>