<?php
class Pengguna { //membuat class Pengguna
    public $nama; //menambah atribut nama dengan akses publik

    public function __construct($nama) { //inisialisi class Pengguna
        $this->nama = $nama;
    }

    public function aksesFitur() { //metode aksesFitur
        return $this->nama;
    }
}

class Dosen extends Pengguna{ //membuat class Dosen
    private $mataKuliah; //menambah atribut mataKuliah dengan akses privat

    public function __construct($nama, $mataKuliah) { //inisialisi class Dosen
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function aksesFitur() { //metode aksesFitur
        return "Dosen: ". $this->nama. "<br> Mata Kuliah: ". $this->mataKuliah. "<br>";
    }
}

class Mahasiswa extends Pengguna{ //membuat class Mahasiswa
    private $nim, $jurusan; //mengubah atribut nama, nim, dan jurusan menjadi akses privat

    public function __construct($nama, $nim, $jurusan) { //inisilasi class Mahasiswa
        parent::__construct($nama);
        $this->nim = $nim; $this->jurusan = $jurusan;
    }

    public function aksesFitur() { //metode aksesFitur
        return "Mahasiswa: ". $this->nama. "<br> NIM: ". $this->nim. "<br> Jurusan: ". $this->jurusan. "<br>";
    }
}
echo "<p><b>4. Polymorphism</b></p>";

$dosen1 = new Dosen("Anay Ailirpa", "Pemrograman Web 2"); //instansiasi class Dosen
echo $dosen1->aksesFitur(). "<br>";

$mahasiswa1 = new Mahasiswa("Yana Aprilia", "230202047", "Komputer dan Bisnis"); //instansiasi class Mahasiswa
echo $mahasiswa1->aksesFitur();
?>

