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
![image](https://github.com/user-attachments/assets/f096960c-bc48-481b-9b59-be2977a172d4)
> Dalam tahap ini dapat diketahui bahwa saat kode program dijalankan, metode **tampilData()** tidak dapat mengambil data dari atribut `nama`, `nim`, dan `jurusan` dengan metode **tampilkanData()** tanpa **Constructor**.

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
![image](https://github.com/user-attachments/assets/05aea27b-ffce-46d4-a324-366ae13456e6)
> Melalui program di atas dapat diketahui, dengan menambahkan **Consctructor** metode **tampilkanData()** berhasil memanggil atribut `nama`, `nim`, dan `jurusan`.

### 3. Membuat Metode Tambahan
Untuk memberikan fleksibilitas dalam pengelolaan data mahasiswa, saya membuat metode **updateJurusan()** yang memungkinkan perubahan jurusan setelah objek dibuat. Metode ini menerima input jurusan baru dan memperbarui atribut `jurusan` pada objek mahasiswa.
```php
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
?>
```
Berikut adalah output dari kode pemrograman di atas.
![image](https://github.com/user-attachments/assets/65329dcf-342a-437d-9745-07d604d797f7)
> Dengan menambahkan fungsi **updateJurusan()** dan mengatur perubahan pada data jurusan (dalam case diatas "Teknik Informatika"). Lalu memanggil kembali fungsi **tampilkanData()**, dan data hasil untuk atribut `jurusan` berubah yang awalnya "Komputer dan Bisnis" menjadi "Teknik Informatika".

### 4. Penggunaan Atribut dan Metode
Langkah terakhir adalah mengubah nilai atribut `nim` dengan menggunakan metode setter. Setelah nilai diubah, saya kembali memanggil metode **tampilkanData()** untuk melihat data mahasiswa yang sudah diperbarui.
```php
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
```
Berikut adalah output dari kode pemrograman di atas.
![image](https://github.com/user-attachments/assets/f5c04282-8a5f-4aa8-b1d7-f2e829b527b1)
> Dengan menambahkan fungsi **updateNim()** dan mengatur perubahan pada data nim (dalam case diatas "123456789"). Lalu memanggil kembali fungsi **tampilkanData()**, dan data hasil untuk atribut `nim` berubah menjadi "123456789".

## Tugas

## 1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.

## 2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.

## 3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.

## 4. Buat dokumentasi proyek dan unggah ke repository GitHub, menjelaskan proses pembuatan kelas, penggunaan metode, dan hasil output.

## Kesimpulan
Melalui tugas ini, saya telah berhasil memahami dan menerapkan konsep dasar pemrograman berorientasi objek dalam PHP, khususnya dalam membuat dan mengelola kelas dan objek. Saya juga belajar cara memanfaatkan constructor untuk menginisialisasi data awal serta bagaimana membuat metode untuk memodifikasi dan menampilkan data objek. Tugas ini memberikan fondasi yang kuat untuk penerapan OOP dalam pengembangan aplikasi berbasis PHP di masa yang akan datang.
