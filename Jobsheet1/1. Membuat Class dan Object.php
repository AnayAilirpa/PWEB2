<?php
//membuat class Mahasiswa
class Mahasiswa {
    //mengubah atribut nama, nim, dan jurusan menjadi akses privat
    public $nama;
    public $nim;
    public $jurusan;
    
    //membuat metode tampilkanData untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: " . $this->nama . "<br> NIM: " . $this->nim . "<br> Jurusan: " . $this->jurusan . "<br>";
    }
}

echo "<p><b>1. Membuat Class dan Object</b></p>";

//instansiasi
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Yana Aprilia";
$mahasiswa1->nim = "230202047";
$mahasiswa1->jurusan = "Komputer dan Bisnis";

//menampilkan data mahasiswa1
echo $mahasiswa1->tampilkanData();
?>
