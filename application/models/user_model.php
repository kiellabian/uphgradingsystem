<?php
	class user_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}

		function getUser($user, $pass, $type) {
			$user = addslashes($user);
			$pass = addslashes($pass);
			$type = addslashes($type);

			if ($type == 'teacher') {
				$query = $this->db->query("SELECT * FROM users WHERE password = '$pass' AND username = '$user' AND type != 'student'");
			} else {
				$query = $this->db->query("SELECT * FROM users WHERE password = '$pass' AND username = '$user' AND type = '$type'");
			}
			
			return $query->result();
		}

		
	}
?>