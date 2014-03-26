<?php
	class student_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}


		function getStudent($student_id) {
			$query = $this->db->query("SELECT  * FROM students WHERE id = '$student_id'");
			return $query->result();	
		}

		function getYearsAndSections($students_id){
			$query = $this->db->query("SELECT  * FROM student_year WHERE student_id = '$student_id'");
			return $query->result();		
		}

		function getClasses($student_id, $year_level_id)  {
			$query = $this->db->query("SELECT * FROM classes INNER JOIN student_year ON classes.year_sem_id = student_year.sys_id AND classes.year_level = student_year.year_level_id WHERE student_year.student_id = '$student_id' AND classes.year.year_level = $year_level_id");
			return $query->result();
		}

		function getGrades($student_id, $class_id) {
			$query = $this->db->query("SELECT * FROM grades WHERE class_id = '$class_id' AND student_id = '$student_id'");
			return $query->result();
		}
	}
?>