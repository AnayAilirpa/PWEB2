<?php
//membuat class Mahasiswa
class Mahasiswa {
    //mengubah atribut nama, nim, dan jurusan menjadi akses privat
    private $nama;
    private $nim;
    private $jurusan;
    
    //membuat metode tampilData untuk menampilkan data mahasiswa
    public function tampilData() {
        return "Nama: " . $this->nama . "<br> NIM: " . $this->nim . "<br> Jurusan: " . $this->jurusan . "<br>";
    }

    //metode getter
    public function getMahasiswa() {
        return "Nama: ". $this->nama. "<br> NIM: ". $this->nim. "<br> Jurusan: ". $this->jurusan. "<br>";
    }
    
    //metode setter
    public function setMahasiswa($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
}

echo "<p><b>2. Encapsulation</b></p>";

//instansiasi
$mahasiswa1 = new Mahasiswa();

//set mahasiswa
$mahasiswa1->setMahasiswa("Yana Aprilia", "230202047", "Komputer dan Bisnis");

//get mahasiswa
echo $mahasiswa1->getMahasiswa();  
echo "<br>";

//set mahasiswa baru
$mahasiswa1->setMahasiswa("AnayAilirpa", "230202047", "Komputer dan Bisnis");
//get Mahasiswa baru
echo $mahasiswa1->getMahasiswa();  
?>
