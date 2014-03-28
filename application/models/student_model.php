<?php
	class student_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}


		function getStudentData($student_id) {
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

		function getClassGrades($student_year, $class_id) {
			$query = $this->db->query("SELECT * FROM grades WHERE class_id = '$class_id' AND student_year_id = '$student_year'");
			return $query->result();
		}

		// function getAllGrades($student_id, $year_sem) {
		// 	$query = $this->db->query("SELECT * FROM student_year INNER JOIN students ON student_year ");
		// }
		
		function getPCES($student_id, $year_sem_id) {
			$query = $this->db->query("SELECT  * FROM pces INNER JOIN student_year ON student_year.id = pces.syl WHERE student_year.student_id = '$student_id' AND student_year.sys_id = '$year_sem_id'");
			return $query->result();			
		}

		function getAttendance($student_id, $year_sem_id) {
			$query = $this->db->query("SELECT  * FROM attendance INNER JOIN student_year ON student_year.id = attendance.syl WHERE student_year.student_id = '$student_id' AND student_year.sys_id = '$year_sem_id'");
			return $query->result();			
		}

		function initialPces($student_id, $year_sem_id) {
			$query = $this->db->query("SELECT * FROM student_year WHERE student_id = '$student_id' AND sys_id = '$year_sem_id'");
			$result = $query->result();
			$syl_id = $result[0]->id;
			$query = $this->db->query("SELECT * FROM traits");
			$traits = $query->result();
			$size = sizeof($query->result());
			for ($i = 0; $i < $size; $i++) {
				$trait_id = $traits[$i]->id;
				for ($period = 1; $period <= 4; $period++) {
					$this->db->query("INSERT INTO pces(trait_id, syl_id, period, grade) VALUES ('$trait_id', '$syl_id', '$period', null)");
				}
			}
		}

		function initialAttendance($student_id, $year_sem_id) {
			$query = $this->db->query("SELECT * FROM student_year WHERE student_id = '$student_id' AND sys_id = '$year_sem_id'");
			$result = $query->result();
			$syl_id = $result[0]->id;
			$query = $this->db->query("SELECT * FROM attendance_trait");
			$traits = $query->result();
			$numTraits = sizeof($query->result());
			$query = $this->db->query("SELECT * FROM months");
			$months = $query->result();
			$numMonths = sizeof($query->result());
			for ($i = 0; $i < $numTraits; $i++) {
				$trait_id = $traits[$i]->id;
				for ($j = 0; $j <= $numMonths; $j++) {
					$month_id = $months[$i]->id;
					$this->db->query("INSERT INTO attendance(attendance_trait_id, month_id, syl_id, value) VALUES ('$trait_id', '$month_id','$syl_id', null)");
				}
			}
		}

		function initialGrades($student_id, $year_sem_id, $class_id) {
			$query = $this->db->query("SELECT * FROM student_year WHERE student_id = '$student_id' AND sys_id = '$year_sem_id'");
			$result = $query->result();
			$syl_id = $result[0]->id;
			for ($period = 1; $period <= 4; $period++) {
					$this->db->query("INSERT INTO grades(class_id, student_year_id, period, grade) VALUES ('$class_id', '$syl_id', '$period', null)");
				}
		}
	}
?>