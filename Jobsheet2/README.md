# Jobsheet2

# Jobsheet 2: Menggunakan Konsep Kelas dan Objek dalam PHP

## Tujuan
Pada jobsheet ini, saya mempraktikkan konsep pemrograman berorientasi objek (OOP) dengan menggunakan kelas dan objek di PHP. Tugas ini meliputi pembuatan kelas, metode, penggunaan constructor, serta modifikasi atribut melalui metode.

## Deskripsi Tugas

### 1. Membuat Class dan Object
Tugas pertama adalah membuat **class Mahasiswa** yang memiliki tiga atribut: `nama`, `nim`, dan `jurusan`. Selain itu, saya membuat metode **tampilkanData()** yang bertujuan untuk menampilkan informasi mahasiswa dalam format yang rapi. Objek dari class Mahasiswa diinstansiasi untuk menampilkan data dari objek tersebut.

### 2. Implementasi Constructor
Pada tahap ini, saya menambahkan **constructor** ke dalam class Mahasiswa untuk menginisialisasi nilai dari atribut `nama`, `nim`, dan `jurusan`. Constructor ini membantu mengatur nilai awal atribut ketika objek pertama kali dibuat, sehingga data mahasiswa langsung terisi saat objek diinstansiasi.

### 3. Membuat Metode Tambahan
Untuk memberikan fleksibilitas dalam pengelolaan data mahasiswa, saya membuat metode **updateJurusan()** yang memungkinkan perubahan jurusan setelah objek dibuat. Metode ini menerima input jurusan baru dan memperbarui atribut `jurusan` pada objek mahasiswa.

### 4. Penggunaan Atribut dan Metode
Tugas terakhir adalah mengubah nilai atribut `nim` dengan menggunakan metode setter. Setelah nilai diubah, saya kembali memanggil metode **tampilkanData()** untuk melihat data mahasiswa yang sudah diperbarui.

## Contoh Kode

```php
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan\n";
    }

    // Metode untuk mengupdate jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

    // Metode untuk mengubah NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}

// Contoh Penggunaan
$mahasiswa1 = new Mahasiswa("Yana Aprilia", "123456", "Informatika");
$mahasiswa1->tampilkanData();

// Mengubah jurusan dan nim
$mahasiswa1->updateJurusan("Teknik Komputer");
$mahasiswa1->setNim("654321");
$mahasiswa1->tampilkanData();
```


Berikut adalah README.md lengkap dengan kesimpulannya dalam bentuk kode:

markdown
Salin kode
# Jobsheet 2: Menggunakan Konsep Kelas dan Objek dalam PHP

## Tujuan
Pada jobsheet ini, saya mempraktikkan konsep pemrograman berorientasi objek (OOP) dengan menggunakan kelas dan objek di PHP. Tugas ini meliputi pembuatan kelas, metode, penggunaan constructor, serta modifikasi atribut melalui metode.

## Deskripsi Tugas

### 1. Membuat Class dan Object
Tugas pertama adalah membuat **class Mahasiswa** yang memiliki tiga atribut: `nama`, `nim`, dan `jurusan`. Selain itu, saya membuat metode **tampilkanData()** yang bertujuan untuk menampilkan informasi mahasiswa dalam format yang rapi. Objek dari class Mahasiswa diinstansiasi untuk menampilkan data dari objek tersebut.

### 2. Implementasi Constructor
Pada tahap ini, saya menambahkan **constructor** ke dalam class Mahasiswa untuk menginisialisasi nilai dari atribut `nama`, `nim`, dan `jurusan`. Constructor ini membantu mengatur nilai awal atribut ketika objek pertama kali dibuat, sehingga data mahasiswa langsung terisi saat objek diinstansiasi.

### 3. Membuat Metode Tambahan
Untuk memberikan fleksibilitas dalam pengelolaan data mahasiswa, saya membuat metode **updateJurusan()** yang memungkinkan perubahan jurusan setelah objek dibuat. Metode ini menerima input jurusan baru dan memperbarui atribut `jurusan` pada objek mahasiswa.

### 4. Penggunaan Atribut dan Metode
Tugas terakhir adalah mengubah nilai atribut `nim` dengan menggunakan metode setter. Setelah nilai diubah, saya kembali memanggil metode **tampilkanData()** untuk melihat data mahasiswa yang sudah diperbarui.

## Contoh Kode

```php
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan\n";
    }

    // Metode untuk mengupdate jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

    // Metode untuk mengubah NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}

// Contoh Penggunaan
$mahasiswa1 = new Mahasiswa("Yana Aprilia", "123456", "Informatika");
$mahasiswa1->tampilkanData();

// Mengubah jurusan dan nim
$mahasiswa1->updateJurusan("Teknik Komputer");
$mahasiswa1->setNim("654321");
$mahasiswa1->tampilkanData();
```
Hasil
Dengan implementasi di atas, saya berhasil membuat class Mahasiswa dan menginisialisasi data melalui constructor. Saya juga mengubah nilai jurusan dan nim menggunakan metode yang telah dibuat, dan menampilkan hasilnya dengan memanggil metode tampilkanData().

Kesimpulan
Melalui tugas ini, saya telah berhasil memahami dan menerapkan konsep dasar pemrograman berorientasi objek (OOP) di PHP, khususnya dalam membuat dan mengelola kelas dan objek. Saya juga belajar cara memanfaatkan constructor untuk menginisialisasi data awal serta bagaimana membuat metode untuk memodifikasi dan menampilkan data objek. Tugas ini memberikan fondasi yang kuat untuk penerapan OOP dalam pengembangan aplikasi berbasis PHP di masa depan.
