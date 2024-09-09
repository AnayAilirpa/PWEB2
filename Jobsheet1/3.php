<?php
//membuat class Pengguna
class Pengguna {
    //menambah atribut nama dengan akses privat
    private $nama;

    //inisialisi class Pengguna
    public function __construct($nama) {
        $this->nama = $nama;
    }

    //metode getNama
    public function getNama() {
        return "Nama: ". $this->nama. "<br>";
    }
}

//inisialisi class Dosen
class Dosen extends Pengguna{
    //menambah atribut mataKuliah dengan akses privat
    private $mataKuliah;

    //inisialisi class Dosen
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    //metode getMataKuliah
    public function getMataKuliah() {
        return "Mata Kuliah: ". $this->mataKuliah. "<br>";
    }
}

//instansiasi class Dosen
echo "<p><b>3. Inheritance</b></p>";
$dosen1 = new Dosen("Yana Aprilia", "Pemrograman Web 2");
//output metode getNama
echo $dosen1->getNama()."<br>"; 
?>

