<?php
	class meta_model extends CI_Model {
		function __construct() {
			parent::__construct();
		}

		function getYearSem() {
			$query = $this->db->query("SELECT * FROM year_sem ORDER BY year DESC,sem DESC");
			return $query->result();
		}
	}
?>