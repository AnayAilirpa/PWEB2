# Jobsheet2

## Menggunakan Konsep Kelas dan Objek dalam PHP
Pada jobsheet ini, saya mempraktikkan konsep pemrograman berorientasi objek (OOP) dengan menggunakan kelas dan objek di PHP. Tugas ini meliputi pembuatan kelas, metode, penggunaan constructor, serta modifikasi atribut melalui metode.

### 1. Membuat Class dan Object
Tugas pertama adalah membuat **class Mahasiswa** yang memiliki tiga atribut: `nama`, `nim`, dan `jurusan`. Selain itu, saya membuat metode **tampilkanData()** yang bertujuan untuk menampilkan informasi mahasiswa dalam format yang rapi. Objek dari class Mahasiswa diinstansiasi untuk menampilkan data dari objek tersebut.
```php
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
```
Berikut adalah output dari kode pemrograman di atas.

> Dalam tahap ini dapat diketahui bahwa saat kode program dijalankan, metode tampilData() tidak dapat mengambil data dari atribut nama, nim dan jurusan dengan metode tampilkanData() tanpa inisialisasi (constructor).

### 2. Implementasi Constructor
Pada tahap ini, saya menambahkan **constructor** ke dalam class Mahasiswa untuk menginisialisasi nilai dari atribut `nama`, `nim`, dan `jurusan`. Constructor ini membantu mengatur nilai awal atribut ketika objek pertama kali dibuat, sehingga data mahasiswa langsung terisi saat objek diinstansiasi.
```php
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
```
Berikut adalah output dari kode pemrograman di atas.

> Dengan menambahkan Consctructor 

### 3. Membuat Metode Tambahan
Untuk memberikan fleksibilitas dalam pengelolaan data mahasiswa, saya membuat metode **updateJurusan()** yang memungkinkan perubahan jurusan setelah objek dibuat. Metode ini menerima input jurusan baru dan memperbarui atribut `jurusan` pada objek mahasiswa.

### 4. Penggunaan Atribut dan Metode
Langkah terakhir adalah mengubah nilai atribut `nim` dengan menggunakan metode setter. Setelah nilai diubah, saya kembali memanggil metode **tampilkanData()** untuk melihat data mahasiswa yang sudah diperbarui.+

## Kesimpulan
Melalui tugas ini, saya telah berhasil memahami dan menerapkan konsep dasar pemrograman berorientasi objek (OOP) di PHP, khususnya dalam membuat dan mengelola kelas dan objek. Saya juga belajar cara memanfaatkan constructor untuk menginisialisasi data awal serta bagaimana membuat metode untuk memodifikasi dan menampilkan data objek. Tugas ini memberikan fondasi yang kuat untuk penerapan OOP dalam pengembangan aplikasi berbasis PHP di masa depan.
