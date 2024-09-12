# Jobsheet1

## Implementasi Prinsip OOP dalam PHP
Tugas ini bertujuan untuk mengimplementasikan prinsip dasar Object-Oriented Programming (OOP) dalam PHP dengan menggunakan konsep Encapsulation, Inheritance, Polymorphism, dan Abstraction. Melalui tugas ini, saya telah membuat beberapa class, metode, dan objek yang menunjukkan cara kerja prinsip-prinsip OOP dalam pemrograman PHP.

### 1. Membuat Class dan Object
Saya telah membuat class **Mahasiswa** yang memiliki atribut `nama`, `nim`, dan `jurusan`. Class ini memiliki metode **tampilkanData()** yang berfungsi untuk menampilkan data mahasiswa tersebut. Objek dari class Mahasiswa diinstansiasi untuk menampilkan data mahasiswa.

```php
<?php
//membuat class Mahasiswa
class Mahasiswa {
    //mengubah atribut nama, nim, dan jurusan menjadi akses privat
    public $nama;
    public $nim;
    public $jurusan;
    
    //membuat metode tampilkanData untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: " . $this->nama . "<br> NIM: " . $this->nim . "<br> Jurusan: " . $this->jurusan . "<br>";
    }
}

echo "<p><b>1. Membuat Class dan Object</b></p>";

//instansiasi
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Yana Aprilia";
$mahasiswa1->nim = "230202047";
$mahasiswa1->jurusan = "Komputer dan Bisnis";

//menampilkan data mahasiswa1
echo $mahasiswa1->tampilkanData();
?>
```
Berikut adalah hasil output dari kode pemrograman di atas.

![image](https://github.com/user-attachments/assets/179da11e-8eca-43bc-8bec-95e55ebd7958)

> Dari kode pemrograman di atas, karena atribut `nama`, `nim`, dan `jurusan` dideklarasikan dengan akses publik maka penambahan data dapat dilakukan tanpa metode setter. Pemanggilan data dari kelas `Mahasiswa` dilakukan dengan metode `tampilkanData()`, metode ini memiliki sifat yang sama dengan metode getter.

### 2. Encapsulation
Dalam tugas ini, saya menerapkan **Encapsulation** dengan mengubah atribut dalam class Mahasiswa menjadi `private`. Untuk mengakses dan mengubah data, saya membuat metode **getter** dan **setter** untuk atribut `nama`, `nim`, dan `jurusan`. Ini mendemonstrasikan kontrol akses terhadap atribut menggunakan metode getter dan setter.

```php
<?php
//membuat class Mahasiswa
class Mahasiswa {
    //mengubah atribut nama, nim, dan jurusan menjadi akses privat
    private $nama;
    private $nim;
    private $jurusan;

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
```
Berikut adalah hasil output dari kode pemrograman di atas.

![image](https://github.com/user-attachments/assets/03c81bdc-1d95-42e6-a82e-0088f9503397)

> Melihat program di atas, dengan perubahan dari akses **public** menjadi akses **private** kita tidak dapat menetapkan nilai dan memanggil atribut `nama`, `nim`, dan `jurusan` tanpa metode setter `setMahasiswa` dan metode getter `gettMahasiswa()`. Pemanggilan dan menetapkan nilai atribut dilakukan dengan hanya memanggol metode saja.

### 3. Inheritance
Saya membuat class **Pengguna** yang berisi atribut `nama` dan metode **getNama()**. Kemudian, saya membuat class **Dosen** yang mewarisi class Pengguna dan menambahkan atribut `mataKuliah`. Saya juga menginstansiasi objek dari class Dosen dan menampilkan data dosen dengan memanfaatkan inheritance.

```php
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
```
Berikut adalah hasil output dari kode pemrograman di atas.

![image](https://github.com/user-attachments/assets/7b2a6d6c-3de8-47ff-bf82-5e05c9e5e8fd)

> Dalam program di atas, untuk menentukan nilai dari atribut class parent `Pengguna` melalui class child `Dosen` dapat dilakukan karena kelas `Dosen` merupakan turunan dari kelas `Pengguna`, namun harus menggunakan metode setter `setName()' dan metode getter `getName()`. Hal tersebut dikarenakan atribut `name` dalam class `Pengguna` memiliki akses privat.

### 4. Polymorphism
Polymorphism diimplementasikan dengan cara membuat class **Pengguna** yang memiliki metode **aksesFitur()**. Saya mengimplementasikan metode ini secara berbeda di class **Dosen** dan **Mahasiswa**. Dengan cara ini, ketika saya memanggil metode aksesFitur() dari objek dosen dan mahasiswa, mereka memberikan hasil yang berbeda sesuai dengan implementasi masing-masing.

```php
<?php
class Pengguna { //membuat class Pengguna
    public $nama; //menambah atribut nama dengan akses publik

    public function aksesFitur() { //metode aksesFitur
        return $this->nama;
    }
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
    private $nim, $jurusan; //menambah atribut nim dan jurusan dengan akses privat

    public function setNIM($nim) { //metode setNIM
        $this->nim = $nim;
    }

    public function setJurusan($jurusan) { //metode setJurusan
        $this->jurusan = $jurusan;
    }

    public function aksesFitur() { //metode aksesFitur
        return "Mahasiswa: ". $this->nama. "<br> NIM: ". $this->nim. "<br> Jurusan: ". $this->jurusan. "<br>";
    }
}
echo "<p><b>4. Polymorphism</b></p>";

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
```
Berikut adalah hasil output dari kode pemrograman di atas.

![image](https://github.com/user-attachments/assets/ef43ff0f-b3a2-4455-b2a0-339a076f204e)

> Dari program di atas, diketahui bahwa kelas `Dosen` dan `Mahasiswa` merukapan kelas turunan dari kelas `Pengguna` sehingga tentu saja mewarisi metode `aksesFitur()` dalam kelas mereka. Dengan itu kelas `Dosen` dan `Mahasiswa` dapat memodifikasi sendiri metode `aksesFitur()` untuk mendapatkan output yang diinginkan, dapat dilihat hasilnya berbeda walaupun masih dengan nama metode yang sama.

### 5. Abstraction
Saya menerapkan **Abstraction** dengan membuat class abstrak **Pengguna** yang memiliki metode abstrak **aksesFitur()**. Class Mahasiswa dan Dosen mengimplementasikan metode abstrak ini dengan cara mereka sendiri. Saya mendemonstrasikan abstraksi ini dengan memanggil metode aksesFitur() dari objek yang diinstansiasi dari class Mahasiswa dan Dosen.

```php
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
```
Berikut adalah hasil output dari kode pemrograman di atas.

![image](https://github.com/user-attachments/assets/e1dc69c3-77db-49e3-aa9d-81bf0d426a05)

> Program di atas menggunakan Kelas `Pengguna` sebagai kelas abstrak yang mendefinisikan kontrak untuk kelas turunan tanpa memberikan implementasi lengkap. Ini memungkinkan kelas turunannya yaitu `Dosen` dan `Mahasiswa` untuk mengimplementasikan metode `aksesFitur()` sesuai dengan kebutuhan spesifik mereka.

## Kesimpulan
Tugas ini berhasil mengimplementasikan prinsip-prinsip OOP, yaitu Encapsulation, Inheritance, Polymorphism, dan Abstraction dalam PHP. Konsep dasar OOP membantu dalam merancang kode yang modular, mudah dipelihara, dan reusable. Dengan memecah program menjadi objek dan memanfaatkan konsep-konsep ini, kode menjadi lebih terstruktur dan lebih mudah untuk dikembangkan dan dikelola.
