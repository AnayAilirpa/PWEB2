<?php
//membuat class Mahasiswa
class Mahasiswa {
    //menambahkan atribut nama, nim dan jurusan dengan akses publik
    public $nama;
    public $nim;
    public $jurusan;

    //membuat metode tamilkanData()
    public function tampilkanData() {
        echo "Nama: ". $this->nama. "<br>";
        echo "NIM: ". $this->nim. "<br>";
        echo "Jurusan: ". $this->jurusan. "<br><br>";
    }
}

//instansiasi
$mhs1 = new Mahasiswa("Yana Aprilia", "230202047", "Komputer dan Bisnis");
$mhs2 = new Mahasiswa("Ana Febri Salusi", "230202027", "Komputer dan Bisnis");

//memanggil metode tampilkanData()
$mhs1->tampilkanData();
$mhs2->tampilkanData();
?>