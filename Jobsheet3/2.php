<?php
class Person { // membuat class Person
    public $name; // membuat attribute name

    public function __construct($name) { // inisialisasi class Person
        $this->name = $name;
    }

    public function getName() {
        return $this->name; // method yang mengembalikan nilai attribute name
    }
}

class Student extends Person { // membuat class Student
    public $studentID; // membuat attribute studentID

    public function __construct($name, $studentID) { // inisialisasi class Student
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID; // method yang mengembalikan nilai attribute studentID
    }
    
    public function getName() { // Override metode getName untuk format khusus
        return "Student: " . $this->name . " (ID: " . $this->studentID . ")";
    }
}

class Teacher extends Person { // membuat class
    public $teacherID; // membuat attribute teacherID

    public function __construct($name, $teacherID) { // inisialisasi class Teacher
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getName() { // Override metode getName untuk format khusus
        return "Teacher: " . $this->name . " (ID: " . $this->teacherID . ")";
    }
}

$student = new Student("Ana Febri Salusi", "AF12345"); // Membuat objek Student
$teacher = new Teacher("Yana Aprilia", "AA13579"); // Membuat objek Teacher

echo $student->getName(); // menampilkan attribute dalam objek Student
echo "<br>";
echo $teacher->getName(); // menampilkan attribute dalam objek Teacher
?>