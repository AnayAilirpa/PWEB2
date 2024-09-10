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
}

$person = new Person("Yana Aprilia"); // membuat objek Person
$student = new Student("Yana Aprilia", "123456789"); // membuat objek Student

echo $person->getName(). "<br><br>"; // menampilkan attribute name objek Person

echo "Name: ". $student->getName(). "<br>"; // menampilkan attribute name objek Student
echo "Student ID: ". $student->getStudentID(). "<br>"; // menampilkan attribute studentID objek Student
?>