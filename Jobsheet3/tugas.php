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
    private $nim; // Encapsulation: NIM bersifat private

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

// instansiasi class 
$dosen = new Dosen("Yana Aprilia", "NIDN13579"); 
$mahasiswa = new Mahasiswa("Ana Febri Salusi", "NIM12345");

// menampilkan attribute
echo $dosen->getName() . " adalah seorang " . $dosen->getRole(); 
echo "<br>";
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole(); 
echo "<br><br>";

// menetapkan attribute
$dosen->setNIDN("54321"); 
$mahasiswa->setNIM("98765"); 

// instansiasi class
$jurnalDosen = new JurnalDosen("AI Research Paper", $dosen); 
$jurnalMahasiswa = new JurnalMahasiswa("Web Development Project", $mahasiswa); 

// menampilkan attribute
echo $jurnalDosen->submitJurnal(); 
echo "<br>";
echo $jurnalMahasiswa->submitJurnal(); 
?>
