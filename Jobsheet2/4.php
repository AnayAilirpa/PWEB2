<?php
//membuat class Mahasiswa
class Mahasiswa {
    //menambahkan atribut nama, nim dan jurusan dengan akses publik
    public $nama;
    public $nim;
    public $jurusan;

    //inisialisasi
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //membuat metode tamilkanData()
    public function tampilkanData() {
        echo "Nama: ". $this->nama. "<br>";
        echo "NIM: ". $this->nim. "<br>";
        echo "Jurusan: ". $this->jurusan. "<br><br>";
    }

    //membuat metode updateJurusan()
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

    public function setNim ($nim) {
        $this->nim = $nim;
    }
}

//instansiasi
$mhs1 = new Mahasiswa("Yana Aprilia", "230202047", "Komputer dan Bisnis");
$mhs2 = new Mahasiswa("Ana Febri Salusi", "230202027", "Komputer dan Bisnis");

//memanggil metode tampilkanData()
$mhs1->tampilkanData();
$mhs2->tampilkanData();

//mengganti jurusan Mahasiswa 1 dan Mahasiswa 2
echo "<b>Merubah jurusan menjadi Teknik Informatika.</b><br><br>";

//memanggil metode updateJurusan()
$mhs1->updateJurusan("Teknik Informatika");
$mhs2->updateJurusan("Teknik Informatika");

//memanggil metode tampilkanData() kembali
$mhs1->tampilkanData();
$mhs2->tampilkanData();

//mengganti NIM Mahasiswa 1 dan Mahasiswa 2
echo "<b>Merubah NIM menjadi 123456789.</b><br><br>";

//memanggil metode setNim()
$mhs1->setNim("123456789");
$mhs2->setNim("123456789");

//memanggil metode tampilkanData() kembali
$mhs1->tampilkanData();
$mhs2->tampilkanData();
?>