# Jobsheet3

## Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP
Proyek ini bertujuan untuk mengimplementasikan prinsip-prinsip dasar Pemrograman Berorientasi Objek (OOP) dalam PHP, termasuk Inheritance, Polymorphism, Encapsulation, dan Abstraction. Studi kasus yang diangkat berfokus pada pengelolaan data Dosen dan Mahasiswa, serta penerapan konsep abstrak melalui pengelolaan jurnal.

### 1. Inheritance
Pada bagian ini, kelas `Person` bertindak sebagai kelas induk dengan atribut `name`. Kelas `Dosen` dan `Mahasiswa` mewarisi dari kelas `Person`, dengan masing-masing menambahkan atribut `nidn` (untuk Dosen) dan `nim` (untuk Mahasiswa). Kelas `Student` dan `Teacher` juga dibuat untuk mendemonstrasikan inheritance dasar.
```php
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
```
Berikut adalah hasil output dari kode pemrograman di atas.
![image](https://github.com/user-attachments/assets/4629e662-7f75-4812-8668-0027817c8710)

### 2. Polymorphism
Polimorfisme diterapkan dengan overriding metode `getRole()` di kelas `Dosen` dan `Mahasiswa`. Kedua kelas ini mengoverride metode `getRole()` dari kelas Person untuk menampilkan peran masing-masing.
```php
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
```
Berikut adalah hasil output dari kode pemrograman di atas.
![image](https://github.com/user-attachments/assets/b2abc93f-9db6-42be-a2d2-22b153e54340)

### 3. Encapsulation
Enkapsulasi digunakan untuk melindungi data sensitif seperti `nidn` (Nomor Induk Dosen Nasional) dan `nim` (Nomor Induk Mahasiswa). Atribut-atribut ini dibuat privat, dan metode setter dan getter disediakan untuk mengakses nilai-nilai tersebut secara aman.
```php
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
```
Berikut adalah hasil output dari kode pemrograman di atas.
![image](https://github.com/user-attachments/assets/dfb0f5a6-3def-4978-bac7-beef6ab73324)

### 4. Abstraction
Pada bagian ini, kelas abstrak `Jurnal` dibuat untuk menangani pengelolaan jurnal yang diimplementasikan oleh kelas `JurnalDosen` dan `JurnalMahasiswa`. Kedua kelas ini mengimplementasikan metode abstrak `getSubmissionDetails()` untuk menyediakan detail pengelolaan jurnal yang berbeda-beda sesuai peran masing-masing.
```php
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
```
Berikut adalah hasil output dari kode pemrograman di atas.
![image](https://github.com/user-attachments/assets/23ead97d-8923-4c01-be43-fe75f507862b)

## Tugas

### 1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
```php
<?php
class Person { // Membuat class Person
    private $name; // membuat attribute name

    public function __construct($name) { // inisialisasi class Person
        $this->name = $name;
    }
}

class Dosen extends Person { // membuat class Dosen
    public $nidn; // membuat attribute nidn

    public function __construct($name, $nidn) { // inisialisasi class Dosen
        parent::__construct($name);
        $this->nidn = $nidn;
    }
}

class Mahasiswa extends Person { // membuat class Mahasiswa
    public $nim; // membuat attribute nim

    public function __construct($name, $nim) { // inisialisasi class Mahasiswa
        parent::__construct($name);
        $this->nim = $nim;
    }
}
?>
```

### 2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
```php
<?php
class Person { // Membuat class Person
    protected $name; // membuat attribute name

    public function __construct($name) { // inisialisasi class Person
        $this->name = $name;
    }

    public function getName() { // method getName
        return $this->name;
    }
}

class Dosen extends Person { // membuat class Dosen
    public $nidn; // membuat attribute nidn

    public function __construct($name, $nidn) { // inisialisasi class Dosen
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getNIDN() { // method getNIDN
        return $this->nidn;
    }

    public function setNIDN($nidn) { // method setNIDN
        $this->nidn = $nidn;
    }
}

class Mahasiswa extends Person { // membuat class Mahasiswa
    public $nim; // membuat attribute nim

    public function __construct($name, $nim) { // inisialisasi class Mahasiswa
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getNIM() { // method getNIM
        return $this->nim;
    }

    public function setNIM($nim) { // method setNIM
        $this->nim = $nim;
    }
}
?>
```

### 3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda.
```php
<?php
class Person { // Membuat class Person
    protected $name; // membuat attribute name

    public function __construct($name) { // inisialisasi class Person
        $this->name = $name;
    }

    public function getRole() { // method getRole
        return "Person";
    }

    public function getName() { // method getName
        return $this->name;
    }
}

class Dosen extends Person { // membuat class Dosen
    public $nidn; // membuat attribute nidn

    public function __construct($name, $nidn) { // inisialisasi class Dosen
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getNIDN() { // method getNIDN
        return $this->nidn;
    }

    public function setNIDN($nidn) { // method setNIDN
        $this->nidn = $nidn;
    }

    public function getRole() { // method getRole
        return "Dosen";
    }
}

class Mahasiswa extends Person { // membuat class Mahasiswa
    public $nim; // membuat attribute nim

    public function __construct($name, $nim) { // inisialisasi class Mahasiswa
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getNIM() { // method getNIM
        return $this->nim;
    }

    public function setNIM($nim) { // method setNIM
        $this->nim = $nim;
    }

    public function getRole() { // method getRole
        return "Mahasiswa";
    }
}
?>
```

### 4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas Mahasiswa.
```php
<?php
class Person { // Membuat class Person
    protected $name; // membuat attribute name

    public function __construct($name) { // inisialisasi class Person
        $this->name = $name;
    }

    public function getRole() { // method getRole
        return "Person";
    }

    public function getName() { // method getName
        return $this->name;
    }
}

class Dosen extends Person { // membuat class Dosen
    private $nidn; // membuat attribute nidn

    public function __construct($name, $nidn) { // inisialisasi class Dosen
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getNIDN() { // method getNIDN
        return $this->nidn;
    }

    public function setNIDN($nidn) { // method setNIDN
        $this->nidn = $nidn;
    }

    public function getRole() { // method getRole
        return "Dosen";
    }
}

class Mahasiswa extends Person { // membuat class Mahasiswa
    private $nim; // membuat attribute nim
    
    public function __construct($name, $nim) { // inisialisasi class Mahasiswa
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getNIM() { // method getNIM
        return $this->nim;
    }

    public function setNIM($nim) { // method setNIM
        $this->nim = $nim;
    }

    public function getRole() { // method getRole
        return "Mahasiswa";
    }
}
?>
```

### 5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.
```php
<?php
class Person { // Membuat class Person
    protected $name; // membuat attribute name

    public function __construct($name) { // inisialisasi class Person
        $this->name = $name;
    }

    public function getRole() { // method getRole
        return "Person";
    }

    public function getName() { // method getName
        return $this->name;
    }
}

class Dosen extends Person { // membuat class Dosen
    private $nidn; // membuat attribute nidn

    public function __construct($name, $nidn) { // inisialisasi class Dosen
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getNIDN() { // method getNIDN
        return $this->nidn;
    }

    public function setNIDN($nidn) { // method setNIDN
        $this->nidn = $nidn;
    }

    public function getRole() { // method getRole
        return "Dosen";
    }
}

class Mahasiswa extends Person { // membuat class Mahasiswa
    private $nim; // membuat attribute nim
    
    public function __construct($name, $nim) { // inisialisasi class Mahasiswa
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getNIM() { // method getNIM
        return $this->nim;
    }

    public function setNIM($nim) { // method setNIM
        $this->nim = $nim;
    }

    public function getRole() { // method getRole
        return "Mahasiswa";
    }
}

abstract class Jurnal { // membuat class abstrak Jurnal
    protected $title;

    public function __construct($title) { // inisialisasi class abstrak Jurnal
        $this->title = $title;
    }

    abstract public function submitJurnal(); // method abstract submitJurnal
}

class JurnalDosen extends Jurnal { // membuat class JurnalDosen 
    private $dosen;

    public function __construct($title, Dosen $dosen) { // inisialisasi class JurnalDosen
        parent::__construct($title);
        $this->dosen = $dosen;
    }

    public function submitJurnal() { // method submitJurnal
        return "Dosen " . $this->dosen->getName() . " (NIDN: " . $this->dosen->getNIDN() . ") submitted the journal: '" . $this->title . "'";
    }
}

class JurnalMahasiswa extends Jurnal { // membuat class JurnalMahasiswa
    private $mahasiswa;

    public function __construct($title, Mahasiswa $mahasiswa) { // inisialisasi class JurnalMahasiswa
        parent::__construct($title);
        $this->mahasiswa = $mahasiswa;
    }

    public function submitJurnal() { // method submitJurnal
        return "Mahasiswa " . $this->mahasiswa->getName() . " (NIM: " . $this->mahasiswa->getNIM() . ") submitted the journal: '" . $this->title . "'";
    }
}
?>
```



## Kesimpulan
Melalui tugas ini, saya berhasil menerapkan empat konsep dasar OOP (Pemrograman Berorientasi Objek) yaitu Inheritance, Polymorphism, Encapsulation, dan Abstraction menggunakan PHP. Setiap konsep diterapkan dalam studi kasus sederhana yang melibatkan Dosen, Mahasiswa, dan pengelolaan Jurnal. Dengan Inheritance, saya dapat membuat kelas yang lebih efisien karena Dosen dan Mahasiswa bisa mewarisi atribut dan metode dari kelas induk. Polymorphism memungkinkan metode yang sama menghasilkan keluaran berbeda sesuai konteks, sedangkan Encapsulation membantu melindungi data sensitif seperti NIM dan NIDN. Abstraction digunakan untuk menyederhanakan pengelolaan jurnal dengan membuat kelas abstrak yang fleksibel. Tugas ini menunjukkan bagaimana OOP membuat kode lebih rapi, mudah dikelola, dan fleksibel untuk dikembangkan. Konsep-konsep ini sangat membantu dalam membangun aplikasi yang lebih baik dan terstruktur.







