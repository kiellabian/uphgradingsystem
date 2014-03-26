<?php
	class teacher_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}


		function getSubjects($teacher_id, $year_sem_id) {
			$query = $this->db->query("SELECT  * FROM classes WHERE teacher_id = '$teacher_id' AND year_sem_id = '$year_sem_id'");
			return $query->result();
		}

		
	}
?>