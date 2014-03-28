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
			$query = $this->db->query("SELECT  * FROM sections INNER JOIN year_level ON year_level.id = sections.year_level_id WHERE sections.id = '$section_id'");
			return $query->result();
		}

		function getSubjectSections($classes_id) {
			$query = $this->db->query("SELECT  * FROM classes INNER JOIN sections ON classes.section_id = sections.id WHERE classes.id = '$class_id'");
			return $query->result();
		}
		
		function getSectionStudents($section, $year_sem_id) {
			$query = $this->db->query("SELECT * FROM student_year INNER JOIN students ON student_year.student_id = students.id WHERE student_year.section_id = '$section' AND student_year.sys_id = '$year_sem_id'");
			return $query->result();
		}

		function getTeacher($teacher_id) {		
			$query = $this->db->query("SELECT  * FROM teachers WHERE id = '$teacher_id'");
			return $query->result();
		}

		function getHomeroom($teacher_id, $year_sem_id) {
			$query = $this->db->query("SELECT  * FROM teacher_sections INNER JOIN sections ON teacher_sections.section_id = sections.id INNER JOIN year_level ON year_level.id = sections. year_level_id WHERE teacher_id = '$teacher_id' AND year_sem_id = '$year_sem_id'");
			return $query->result();
		}

		function getPCES($student_id, $year_id) {
			$query = $this->db->query("SELECT  * FROM pces WHERE student_id = '$student_id' AND year_id = '$year_id'");
			return $query->result();			
		}

		function getAttendance($student_id, $year_id) {
			$query = $this->db->query("SELECT  * FROM attendance WHERE student_id = '$student_id' AND year_id = '$year_id'");
			return $query->result();			
		}

		function getGrades($student_year, $class_id) {
			$query = $this->db->query("SELECT * FROM grades WHERE class_id = '$class_id' AND student_year_id = '$student_year'");
			return $query->result();
		}


		function editGrades($student_year, $class_id, $period, $grade) {
			$query = $this->db->query("UPDATE grades SET grade = '$grade' WHERE class_id = '$class_id' AND student_year_id = '$student_year' AND period = '$period'");	
		}

		function updatePces($student_id, $year_id, $trait_id, $period, $grade) {
			$query = $this->db->query("SELECT * pces WHERE student_id = '$student_id' AND year_id = '$year_id' AND trait_id = '$trait_id' AND period = '$period' AND grade = '$grade'");
			$result = $query->result();
			if (sizeof($result) == 0) {
				$this->db->query("INSERT INTO pces (student_id, year_id, trait_id, period, grade) VALUES ('$student_id', '$year_id', '$trait_id', '$period', '$grade')");	
			} else {
				$this->db->query("UPDATE pces SET grade = '$grade' WHERE student_id = '$student_id' AND year_id = '$year_id' AND trait_id = '$trait_id' AND period = '$period'");	
			}	
		}

		function updateAttendance($student_id, $year_id, $trait_id, $period, $grade) {
			$query = $this->db->query("SELECT * pces WHERE student_id = '$student_id' AND year_id = '$year_id' AND trait_id = '$trait_id' AND period = '$period' AND grade = '$grade'");
			$result = $query->result();
			if (sizeof($result) == 0) {
				$this->db->query("INSERT INTO pces (student_id, year_id, trait_id, period, grade) VALUES ('$student_id', '$year_id', '$trait_id', '$period', '$grade')");	
			} else {
				$this->db->query("UPDATE pces SET grade = '$grade' WHERE student_id = '$student_id' AND year_id = '$year_id' AND trait_id = '$trait_id' AND period = '$period'");	
			}	
		}
	}
?>