<?php
abstract class Course { // membuat class abstract Course
    protected $courseName; // membuat attribute courseName
    protected $courseCode; // membuat attribute courseCode

    public function __construct($courseName, $courseCode) { // inisialisasi class Course
        $this->courseName = $courseName;
        $this->courseCode = $courseCode;
    }

    abstract public function getCourseDetails(); // method abstract getCourseDetails
} 

class OnlineCourse extends Course { // membuat class OnlineCourse 
    private $platform; // membuat attribute platform

    public function __construct($courseName, $courseCode, $platform) { // inisialisasi class OnlineCourse
        parent::__construct($courseName, $courseCode);
        $this->platform = $platform;
    }

    public function getCourseDetails() { // override method getCourseDetails
        return "Online Course: " . $this->courseName . "(Code: " . $this->courseCode . ") <br> Platform: " . $this->platform . "<br>";
    }
}

class OfflineCourse extends Course { // membuat class OfflineCourse
    private $location; // membuat attribute location

    public function __construct($courseName, $courseCode, $location) { // inisialisasi class OfflineCourse
        parent::__construct($courseName, $courseCode);
        $this->location = $location;
    }

    public function getCourseDetails() { // override method getCourseDetails
        return "Offline Course: " . $this->courseName . "(Code: " . $this->courseCode . ") <br> Location: " . $this->location . "<br>";
    }
}

$onlineCourse = new OnlineCourse("Pemrograman Web 2", "AA111", "Dicoding"); // membuat objek OnlineCourse
$offlineCourse = new OfflineCourse("Pemrograman Web 1", "YA999", "GTIL"); // membuat objek OfflineCourse

echo $onlineCourse->getCourseDetails(); // menampilkan objek OnlineCourse
echo "<br>";
echo $offlineCourse->getCourseDetails(); // menampilkan objek OfflineCourse
?>
