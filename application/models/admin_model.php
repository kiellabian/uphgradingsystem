<?php
	class admin_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}

		function initialTraits() {
			$this->db->query("INSERT INTO traits(name) VALUES ('Manners')");
			$this->db->query("INSERT INTO traits(name) VALUES ('Appearance')");
			$this->db->query("INSERT INTO traits(name) VALUES ('Dependability')");
			$this->db->query("INSERT INTO traits(name) VALUES ('Cooperation')");
			$this->db->query("INSERT INTO traits(name) VALUES ('Attendance')");
			$this->db->query("INSERT INTO traits(name) VALUES ('Initiative & Resourcefulness')");
			$this->db->query("INSERT INTO traits(name) VALUES ('Leadership')");
		}
		function editTrait($id, $trait_name) {
			$this->db->query("UPDATE traits SET name = '$trait_name' WHERE id = '$id'");	
		}
		function newTrait($name) {
			$this->db->query("INSERT INTO traits(name) VALUES ('$name')");
		}
		function deleteTrait($id) {
			$this->db->query("DELETE FROM traits WHERE id = '$id'");
		}

		function initialAttendanceTraits() {
			$this->db->query("INSERT INTO attendance_trait(name) VALUES ('No. of School Days')");
			$this->db->query("INSERT INTO attendance_trait(name) VALUES ('No. of Days Present')");
			$this->db->query("INSERT INTO attendance_trait(name) VALUES ('No. of Times Tardy')");
			$this->db->query("INSERT INTO attendance_trait(name) VALUES ('No. of Classes Cut')");
		}
		function editAttendanceTrait($id, $trait_name) {
			$this->db->query("UPDATE attendance_trait SET name = '$trait_name' WHERE id = '$id'");	
		}
		function newAttendanceTrait($name) {
			$this->db->query("INSERT INTO attendance_trait(name) VALUES ('$name')");
		}
		function deleteAttendanceTrait($id) {
			$this->db->query("DELETE FROM attendance_trait WHERE id = '$id'");
		}

		function initialMonths() {
			$this->db->query("INSERT INTO months(name) VALUES ('August')");
			$this->db->query("INSERT INTO months(name) VALUES ('September')");
			$this->db->query("INSERT INTO months(name) VALUES ('October')");
			$this->db->query("INSERT INTO months(name) VALUES ('November')");
			$this->db->query("INSERT INTO months(name) VALUES ('December')");
			$this->db->query("INSERT INTO months(name) VALUES ('January')");
			$this->db->query("INSERT INTO months(name) VALUES ('February')");
			$this->db->query("INSERT INTO months(name) VALUES ('March')");
			$this->db->query("INSERT INTO months(name) VALUES ('April')");
			$this->db->query("INSERT INTO months(name) VALUES ('May')");
		}
		}
		function editMonth($id, $month_name) {
			$this->db->query("UPDATE months SET name = '$month_name' WHERE id = '$id'");	
		}
		function newMonth($name) {
			$this->db->query("INSERT INTO months(name) VALUES ('$name')");
		}
		function deleteMonth($id) {
			$this->db->query("DELETE FROM months WHERE id = '$id'");
		}

		function initialSection() {
			$this->db->query("INSERT INTO sections(name) VALUES ('Bartlett')");
			$this->db->query("INSERT INTO sections(name) VALUES ('Villamor')");
			$this->db->query("INSERT INTO sections(name) VALUES ('Benton')");
			$this->db->query("INSERT INTO sections(name) VALUES ('Palma')");
			$this->db->query("INSERT INTO sections(name) VALUES ('Sison')");
			$this->db->query("INSERT INTO sections(name) VALUES ('Bocobo')");
		}

		function editSection($id, $section_name) {
			$this->db->query("UPDATE sections SET name = '$section_name' WHERE id = '$id'");	
		}
		function newSection($name) {
			$this->db->query("INSERT INTO sections(name) VALUES ('$name')");
		}
		function deleteSection($id) {
			$this->db->query("DELETE FROM section WHERE id = '$id'");
		}

		function initialYearLevel() {
			$this->db->query("INSERT INTO year_level(year_level) VALUES ('Grade 7')");
			$this->db->query("INSERT INTO year_level(year_level) VALUES ('Grade 8')");
			$this->db->query("INSERT INTO year_level(year_level) VALUES ('I')");
			$this->db->query("INSERT INTO year_level(year_level) VALUES ('II')");
			$this->db->query("INSERT INTO year_level(year_level) VALUES ('III')");
			$this->db->query("INSERT INTO year_level(year_level) VALUES ('IV')");
		}
		}
		function editYearLevel($id, $level_name) {
			$this->db->query("UPDATE year_level SET year_level = '$level_name' WHERE id = '$id'");	
		}
		function newYearLevel($name) {
			$this->db->query("INSERT INTO year_level(year_level) VALUES ('$name')");
		}
		function deleteYearLevel($id) {
			$this->db->query("DELETE FROM year_level WHERE id = '$id'");
		}

		function newStudent($id, $firstname, $middlename, $lastname, $age, $gender) {
			$this->db->query("INSERT INTO students(id, first_name, middle_name, last_name, gender, age) VALUES '$id', '$firsname', '$middleanme', '$lastname', '$gender', '$age')");
		}

		function newTeacher($firstname, $middlename, $lastname, $age, $gender) {
			$this->db->query("INSERT INTO teachers(first_name, middle_name, last_name, gender, age) VALUES ('$firsname', '$middleanme', '$lastname', '$gender', '$age')");
		}

		function newSubject($name) {
			$this->db->query("INSERT INTO subjects(name) VALUES ('$name')");
		}

		function newClass($year_sem_id, $subject_id, $teacher_id, $year_level, $section_id) {
			$this->db->query("INSERT INTO classes(year_sem_id, subject_id, teacher_id, year_level, section_id) VALUES ($year_sem_id, $subject_id, $teacher_id, $year_level, $section_id)");
		}

		function deleteStudent($id) {
			$this->db->query("DELETE FROM students WHERE id = '$id'");
		}

		function deleteTeacher($id) {
			$this->db->query("DELETE FROM teachers WHERE id = '$id'");
		}

		function deleteClasses($id) {
			$this->db->query("DELETE FROM classes WHERE id = '$id'");
		)
		
		function editStudent($id, $firstname, $middlename, $lastname, $age, $gender) {
			$this->db->query("UPDATE students SET first_name = '$firstname', middle_name = '$middlename', last_name = '$lastname', gender = '$gender', age = '$age' WHERE id = '$id'");
		}

		function editTeacher($id, $firstname, $middlename, $lastname, $age, $gender) {
			$this->db->query("UPDATE teachers SET first_name = '$firstname', middle_name = '$middlename', last_name = '$lastname', gender = '$gender', age = '$age' WHERE id = '$id'");
		}

		function editSubject($name) {
			$this->db->query("UPDATE subjects SET name = '$name'");
		}

		function editClass($id, $year_sem_id, $subject_id, $teacher_id, $year_level, $section_id) {
			$this->db->query("UPDATE teachers SET year_sem_id = '$year_sem_id', subject_id = '$subject_id', teacher_id = '$teacher_id', section_id = '$section_id' WHERE id = '$id'");
		}
		
		function initialPces() {
			$query = $this->db->query("SELECT * FROM traits");
			$result = $query->result();
			$size = size($result);
			for ($i = 0; $i < $size; $i++) {

			}
		}	
	}
?>