<?php
//membuat class Mahasiswa
class Mahasiswa {
    //mengubah atribut nama, nim, dan jurusan menjadi akses privat
    public $nama;
    public $nim;
    public $jurusan;

    //inisilasi
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //membuat metode tampilData untuk menampilkan data mahasiswa
    public function tampilData() {
        return "Nama: ". $this->nama. "<br> NIM: ". $this->nim. "<br> Jurusan: ". $this->jurusan. "<br>";
    }
}

//instansiasi
echo "<p><b>1. Membuat Class dan Object</b></p>";
$mahasiswa1 = new Mahasiswa("Yana Aprilia", "230202047", "Komputer dan Bisnis");
//menampilkan data mahasiswa1
echo $mahasiswa1->tampilData(); 
?>