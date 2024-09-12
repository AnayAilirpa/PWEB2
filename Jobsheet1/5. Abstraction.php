<?php
abstract class Pengguna { //membuat class abstrak Pengguna
    public $nama; //menambah atribut nama dengan akses publik

    abstract public function aksesFitur(); //metode abstrak aksesFitur
}

class Dosen extends Pengguna{ //membuat class Dosen
    private $mataKuliah; //menambah atribut mataKuliah dengan akses privat

    public function setMataKuliah($mataKuliah) { //metode setMataKuliah
        $this->mataKuliah = $mataKuliah;
    }

    public function aksesFitur() { //metode aksesFitur
        return "Dosen: ". $this->nama. "<br> Mata Kuliah: ". $this->mataKuliah. "<br>";
    }
}

class Mahasiswa extends Pengguna{ //membuat class Mahasiswa
    private $nim, $jurusan; //mengubah atribut nama, nim, dan jurusan menjadi akses privat

    public function setNIM($nim) { // metode setNIM
        $this->nim = $nim;
    }

    public function setJurusan($jurusan) { //metode setJurusan
        $this->jurusan = $jurusan;
    }

    public function aksesFitur() { //metode aksesFitur
        return "Mahasiswa: ". $this->nama. "<br> NIM: ". $this->nim. "<br> Jurusan: ". $this->jurusan. "<br>";
    }
}
echo "<p><b>5. Abstraction</b></p>";

$dosen1 = new Dosen(); // instansiasi class Dosen
$dosen1->nama = "Anay Ailirpa";
$dosen1->setMataKuliah("Pemrograman Web 2");
echo $dosen1->aksesFitur() . "<br>";

$mahasiswa1 = new Mahasiswa(); // instansiasi class Mahasiswa
$mahasiswa1->nama = "Yana Aprilia";
$mahasiswa1->setNIM("230202047");
$mahasiswa1->setJurusan("Komputer dan Bisnis");
echo $mahasiswa1->aksesFitur();
?>

