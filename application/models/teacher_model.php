<?php
	class teacher_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}


		function getSubjects($teacher_id, $year_sem_id) {
			$query = $this->db->query("SELECT  * FROM classes INNER JOIN subjects ON classes.subject_id = subjects.id WHERE classes.teacher_id = '$teacher_id' AND classes.year_sem_id = '$year_sem_id'");
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
		function getGrades($student_year, $class_id) {
			$query = $this->db->query("SELECT * FROM grades WHERE class_id = '$class_id' AND student_year_id = '$student_year'");
			return $query->result();
		}


		function editGrades($student_year, $class_id, $period, $grade) {
			$query = $this->db->query("UPDATE grades SET grade = '$grade' WHERE class_id = '$class_id' AND student_year_id = '$student_year' AND period = '$period'");	
		}

		function editPces($student_year, $trait_id, $period, $value) {
			$query = $this->db->query("UPDATE pces SET grade = '$value' WHERE syl_id = '$student_year' AND trait_id = $trait_id AND period = '$period'");	
		}

		function editAttendance($student_year, $month_id, $attendance_trait_id, $value) {
			$query = $this->db->query("UPDATE grades SET value = '$value' WHERE class_id = '$class_id' AND student_year_id = '$student_year' AND month_id = '$month_id' AND attendance_trait_id = '$attendance_trait_id'");	
		}
	}
?>