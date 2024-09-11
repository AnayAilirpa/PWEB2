<?php
class Person { // membuat class Person
    private $name; // membuat attribute name

    public function __construct($name) { // inisialisasi class Person
        $this->name = $name;
    }

    public function getName() {
        return $this->name; // method yang mengembalikan nilai attribute name
    }

    public function setName($name) { // method setter untuk attribute name
        $this->name = $name;
    }
}

class Student extends Person { // membuat class Student
    private $studentID; // membuat attribute studentID

    public function __construct($name, $studentID) { // inisialisasi class Student
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID; // method yang mengembalikan nilai attribute studentID
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID; // method setter untuk attribute studentID
    }
    
    public function getName() { // Override metode getName untuk format khusus
        return "Student: " . parent::getName() . " (ID: " . $this->studentID . ")";
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
echo "<br><br>";

$student->setName("AFS"); // merubah attribute name dalam objek Student
$student->setStudentID("AF54321"); // merubah attribute studentID dalam objek Student

echo "<b>Setelah merubah attribut nama dan studentID.</b><br><br>";

echo $student->getName(); // menampilkan attribute dalam objek Student kembali
?>