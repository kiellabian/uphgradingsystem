<?php
	class meta_model extends CI_Model {
		function __construct() {
			parent::__construct();
		}

		function getYearSem() {
			$query = $this->db->query("SELECT * FROM year_sem ORDER BY year,sem DESC");
			return $query->return();
		}
	}
?>