<?php
	class meta_model extends CI_Model {
		function __construct() {
			parent::__construct();
		}

		function getYearSem() {
			$query = $this->db->query("SELECT *, year_sem.id as sys FROM year_sem INNER JOIN years ON year_sem.year_id = years.id ORDER BY years.year DESC, year_sem.sem DESC");
			return $query->result();
		}
	}
?>