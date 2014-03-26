<?php
	class teacher_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}


		function getSubjects($teacher_id, $year_sem_id) {
			$query = $this->db->query("SELECT  * FROM classes WHERE teacher_id = '$teacher_id' AND year_sem_id = '$year_sem_id'");
			return $query->result();
		}

		function getSection($section_id) {
			$query = $this->db->query("SELECT  * FROM sections WHERE id = '$section_id'");
			return $query->result();	
		}

		function getClassStudents($class_id) {
			$query = $this->db->query("SELECT * FROM classes INNER JOIN student_year ON student_year.year_level_id = classes.year_level AND student_year.sys_id = classes.year_sem_id AND student_year.section_id = classes.section_id WHERE classes.id = '$class_id'");
			return $query->result();	

		}

		function getTeacher($teacher_id) {
			$query = $this->db->query("SELECT  * FROM teacher WHERE id = '$teacher_id'");
			return $query->result()-
		}

		function getHomeroom($teacher_id) {
			$query = $this->db->query("SELECT  * FROM teacher_sections WHERE teacher_id = '$teacher_id'");
			return $query->result();		
		}

		function getPCES($student_id, $year_sem_id) {
			$query = $this->db->query("SELECT  * FROM pces INNER JOIN student_year ON student_year.id = pces.syl WHERE student_year.student_id = '$student_id' AND student_year.sys_id = '$year_sem_id'");
			return $query->result();			
		}

		function getAttendance($student_id, $year_sem_id) {
			$query = $this->db->query("SELECT  * FROM attendance INNER JOIN student_year ON student_year.id = attendance.syl WHERE student_year.student_id = '$student_id' AND student_year.sys_id = '$year_sem_id'");
			return $query->result();			
		}
		

	}
?>