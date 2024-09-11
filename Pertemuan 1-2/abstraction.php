<?php
// Kelas abstrak Bentuk
abstract class Bentuk {
    abstract public function gambar();
}

// Kelas Lingkaran
class Lingkaran extends Bentuk {
    public function gambar() {
        return "Menggambar Lingkaran";
    }
}

// Kelas Persegi
class Persegi extends Bentuk {
    public function gambar() {
        return "Menggambar Persegi";
    }
}

// Fungsi untuk menggambar bentuk
function tampilkanGambar(Bentuk $bentuk) {
    echo $bentuk->gambar();
}

// Buat objek Lingkaran dan Persegi
$lingkaran = new Lingkaran();
$persegi = new Persegi();

// Abstraksi dalam aksi
tampilkanGambar($lingkaran); // output: Menggambar Lingkaran
echo "<br>";
tampilkanGambar($persegi); // output: Menggambar Persegi
?>
