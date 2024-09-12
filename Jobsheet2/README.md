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

![image](https://github.com/user-attachments/assets/38baa226-7587-42d4-ba3c-d7d86f594a00)

> Dalam tahap ini dapat diketahui bahwa saat kode program dijalankan, metode `tampilData()` tidak dapat mengambil data dari atribut `nama`, `nim`, dan `jurusan` dengan metode `tampilkanData()` tanpa **Constructor**.

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

![image](https://github.com/user-attachments/assets/a256d590-2806-4a18-ade1-23e49a18c31f)

> Melalui program di atas dapat diketahui, dengan menambahkan **Consctructor** metode `tampilkanData()` berhasil memanggil atribut `nama`, `nim`, dan `jurusan`.

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

![image](https://github.com/user-attachments/assets/128881c5-04e7-4d51-a7c5-172dcfd08748)

> Dengan menambahkan metode `updateJurusan()` dan mengatur perubahan pada data jurusan (dalam case diatas "Teknik Informatika"). Lalu memanggil kembali metode `tampilkanData()`, dan data hasil untuk atribut `jurusan` berubah yang awalnya "Komputer dan Bisnis" menjadi "Teknik Informatika".

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

![image](https://github.com/user-attachments/assets/54271d5a-8077-4efb-ac46-eb4dd618cd06)

> Dengan menambahkan metode `updateNim()` dan mengatur perubahan pada attribut `nim` (dalam case diatas "123456789"). Lalu memanggil kembali metode `tampilkanData()`, dan data hasil untuk atribut `nim` berubah menjadi "123456789".

## Tugas

### 1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
```php
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
}
?>
```

### 2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
```php
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
?>
```

### 3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.
```php
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
```
### 4. Output Tugas
![image](https://github.com/user-attachments/assets/d4eb9f25-c73c-4e2e-b93d-c3e87cb28786)

## Kesimpulan
Melalui tugas ini, saya telah berhasil memahami dan menerapkan konsep dasar pemrograman berorientasi objek dalam PHP, khususnya dalam membuat dan mengelola kelas dan objek. Saya juga belajar cara memanfaatkan constructor untuk menginisialisasi data awal serta bagaimana membuat metode untuk memodifikasi dan menampilkan data objek. Tugas ini memberikan fondasi yang kuat untuk penerapan OOP dalam pengembangan aplikasi berbasis PHP di masa yang akan datang.
