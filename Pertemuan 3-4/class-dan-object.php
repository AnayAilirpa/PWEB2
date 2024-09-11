<?php
//definisi kelas
class Mobil {
    //attribut atau properties
    public $merk;
    public $warna;

    //constructor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    //metode atau function
    public function deskripsi() {
        return "Mobil ini adalah $this->merk berwarna $this->warna";
    }
}

//instansiasi objek
$mobil = new Mobil("Toyota", "Hitam");
echo $mobil->deskripsi();
?>