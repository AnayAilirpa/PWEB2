<?php
//membuat class Dosen
class Dosen {
    //menambahkan atribut nama, nip, dan mataKuliah dengan akses publik.
    public $nama;
    public $nip;
    public $mataKuliah;
    
    //inisialisasi class Dosen
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    //membuat method tampilDosen
    public function tampilDosen() {
        echo "Nama: ". $this->nama. "<br>";
        echo "NIP: ". $this->nip. "<br>";
        echo "Mata Kuliah: ". $this->mataKuliah. "<br><br>";
    }
}

//instansiasi class Dosen
$dosen1 = new Dosen("Ana Febri Salusi", "12345", "Sastra Jawa");
$dosen2 = new Dosen("Yana Aprilia", "13579", "Filsafat");

//memanggil metode tampilDosen()
$dosen1->tampilDosen();
$dosen2->tampilDosen();
?>