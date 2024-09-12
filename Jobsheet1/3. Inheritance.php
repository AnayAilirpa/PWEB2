<?php
//membuat class Pengguna
class Pengguna {
    //menambah atribut nama dengan akses privat
    private $nama;

    // Metode setNama
    public function setNama($nama) {
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

    // Metode setMataKuliah
    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }

    //metode getMataKuliah
    public function getMataKuliah() {
        return "Mata Kuliah: ". $this->mataKuliah. "<br>";
    }
}

//instansiasi class Dosen
echo "<p><b>3. Inheritance</b></p>";
$dosen1 = new Dosen();

// Mengatur nama 
$dosen1->setNama("Yana Aprilia");

// Output metode getNama 
echo $dosen1->getNama();
?>

