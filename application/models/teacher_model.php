<?php
	class teacher_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}

		function getSubjects($teacher_id, $year_sem_id) {
			$query = $this->db->query("SELECT  *, classes.id AS class_id FROM classes INNER JOIN subjects ON classes.subject_id = subjects.id WHERE classes.teacher_id = '$teacher_id' AND classes.year_sem_id = '$year_sem_id' GROUP BY subject_id");
			return $query->result();
		}

		function getSubject($subject_id) {
			$query = $this->db->query("SELECT  * FROM subjects WHERE id = '$subject_id'");
			return $query->result();
		}
		
		function getSection($section_id) {
			$query = $this->db->query("SELECT  * FROM sections INNER JOIN year_level ON year_level.id = sections.year_level_id WHERE sections.id = '$section_id'");
			return $query->result();
		}

		function getSubjectSections($subject_id, $teacher_id, $year_sem_id) {
			$query = $this->db->query("SELECT  * FROM classes INNER JOIN sections ON classes.section_id = sections.id INNER JOIN year_level ON year_level.id = sections.year_level_id WHERE classes.subject_id = '$subject_id' AND classes.teacher_id = '$teacher_id' AND classes.year_sem_id = '$year_sem_id'");
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

		function getGrades($student_id, $subject_id, $year_sem_id) {
			$query = $this->db->query("SELECT * FROM students INNER JOIN student_year ON students.id = student_year.student_id INNER JOIN grades ON grades.student_year_id = student_year.id INNER JOIN classes ON grades.class_id = classes.id INNER JOIN subjects ON classes.subject_id = subjects.id WHERE classes.subject_id = '$subject_id' AND classes.year_sem_id = '$year_sem_id' AND students.id = '$student_id'");
			return $query->result();
		}

		function updateGrades($student_id, $subject_id, $year_sem_id, $period, $value){
			$query = $this->db->query("SELECT *,  student_year.id AS sy_id FROM students INNER JOIN student_year ON student_year.student_id = students.id WHERE student_year.sys_id = '$year_sem_id'");
			$result = $query->result();
			$student_year = $result[0]->sy_id;
			$query = $this->db->query("SELECT *, classes.id = class_id FROM grades INNER JOIN classes ON classes.id = grades.class_id WHERE classes.subject_id = '$subject_id' AND classes.year_sem_id = '$year_sem_id' AND grades.student_year_id = '$student_year' AND grades.period = '$period'");
			$result = $query->result();
			$class_id = $result[0]->class_id;
			if (sizeof($result) == 0) {
				$this->db->query("INSERT INTO grades(student_year_id, class_id, period, grade) VALUES ('$student_year', '$class_id', '$period', '$grade')");	
			} else {
				$this->db->query("UPDATE grades SET grade = '$grade' WHERE student_year_id = '$student_year' AND class_id = '$class_id' AND period = '$period'");	
			}
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