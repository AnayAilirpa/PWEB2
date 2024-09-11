<?php
// Kelas dasar Hewan
class Hewan {
    public function suara() {
        return "Hewan membuat suara";
    }
}

// Kelas Anjing yang mewarisi dari Hewan
class Anjing extends Hewan {
    public function suara() {
        // Memanggil metode suara() dari kelas induk
        return parent::suara() . " tapi Anjing berkata 'Guk guk'";
    }
}

// Kelas Kucing yang mewarisi dari Hewan
class Kucing extends Hewan {
    public function suara() {
        // Memanggil metode suara() dari kelas induk
        return parent::suara() . " tapi Kucing berkata 'Meong'";
    }
}

// Fungsi untuk mencetak suara hewan
function cetakSuara(Hewan $hewan) {
    echo $hewan->suara();
}

// Buat objek Anjing dan Kucing
$anjing = new Anjing();
$kucing = new Kucing();

// Polimorfisme dalam aksi
cetakSuara($anjing); // output: Hewan membuat suara tapi Anjing berkata 'Guk guk'
echo "<br>";
cetakSuara($kucing); // output: Hewan membuat suara tapi Kucing berkata 'Meong'
?>
