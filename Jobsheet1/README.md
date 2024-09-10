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

    //inisilasi
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //membuat metode tampilData untuk menampilkan data mahasiswa
    public function tampilData() {
        return "Nama: ". $this->nama. "<br> NIM: ". $this->nim. "<br> Jurusan: ". $this->jurusan. "<br>";
    }
}

//instansiasi
echo "<p><b>1. Membuat Class dan Object</b></p>";
$mahasiswa1 = new Mahasiswa("Yana Aprilia", "230202047", "Komputer dan Bisnis");
//menampilkan data mahasiswa1
echo $mahasiswa1->tampilData(); 
?>
```
Berikut adalah hasil output dari kode pemrograman di atas.
![image](https://github.com/user-attachments/assets/ce04363e-40a3-4fae-8fcc-a2904a98bef3)

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

    //inisilasi
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
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

//instansiasi
echo "<p><b>2. Encapsulation</b></p>";
$mahasiswa1 = new Mahasiswa("Yana Aprilia", "230202047", "Komputer dan Bisnis");
//output metode getter
echo $mahasiswa1->getMahasiswa()."<br>"; 

$mahasiswa1->setMahasiswa("AnayAilirpa", "230202047", "Komputer dan Bisnis");
//output metode setter
echo $mahasiswa1->getMahasiswa();  
?>
```
Berikut adalah hasil output dari kode pemrograman di atas.
![image](https://github.com/user-attachments/assets/d46449e4-6fa7-4004-a462-0982a19dc143)

### 3. Inheritance
Saya membuat class **Pengguna** yang berisi atribut `nama` dan metode **getNama()**. Kemudian, saya membuat class **Dosen** yang mewarisi class Pengguna dan menambahkan atribut `mataKuliah`. Saya juga menginstansiasi objek dari class Dosen dan menampilkan data dosen dengan memanfaatkan inheritance.

```php
<?php
//membuat class Pengguna
class Pengguna {
    //menambah atribut nama dengan akses privat
    private $nama;

    //inisialisi class Pengguna
    public function __construct($nama) {
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

    //inisialisi class Dosen
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    //metode getMataKuliah
    public function getMataKuliah() {
        return "Mata Kuliah: ". $this->mataKuliah. "<br>";
    }
}

//instansiasi class Dosen
echo "<p><b>3. Inheritance</b></p>";
$dosen1 = new Dosen("Yana Aprilia", "Pemrograman Web 2");
//output metode getNama
echo $dosen1->getNama()."<br>"; 
?>
```
Berikut adalah hasil output dari kode pemrograman di atas.
![image](https://github.com/user-attachments/assets/c705a1e0-e0b4-4230-944f-50661918e7bd)

### 4. Polymorphism
Polymorphism diimplementasikan dengan cara membuat class **Pengguna** yang memiliki metode **aksesFitur()**. Saya mengimplementasikan metode ini secara berbeda di class **Dosen** dan **Mahasiswa**. Dengan cara ini, ketika saya memanggil metode aksesFitur() dari objek dosen dan mahasiswa, mereka memberikan hasil yang berbeda sesuai dengan implementasi masing-masing.

```php
<?php
class Pengguna { //membuat class Pengguna
    public $nama; //menambah atribut nama dengan akses publik

    public function __construct($nama) { //inisialisi class Pengguna
        $this->nama = $nama;
    }

    public function aksesFitur() { //metode aksesFitur
        return $this->nama;
    }
}

class Dosen extends Pengguna{ //membuat class Dosen
    private $mataKuliah; //menambah atribut mataKuliah dengan akses privat

    public function __construct($nama, $mataKuliah) { //inisialisi class Dosen
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function aksesFitur() { //metode aksesFitur
        return "Dosen: ". $this->nama. "<br> Mata Kuliah: ". $this->mataKuliah. "<br>";
    }
}

class Mahasiswa extends Pengguna{ //membuat class Mahasiswa
    private $nim, $jurusan; //mengubah atribut nama, nim, dan jurusan menjadi akses privat

    public function __construct($nama, $nim, $jurusan) { //inisilasi class Mahasiswa
        parent::__construct($nama);
        $this->nim = $nim; $this->jurusan = $jurusan;
    }

    public function aksesFitur() { //metode aksesFitur
        return "Mahasiswa: ". $this->nama. "<br> NIM: ". $this->nim. "<br> Jurusan: ". $this->jurusan. "<br>";
    }
}
echo "<p><b>4. Polymorphism</b></p>";

$dosen1 = new Dosen("Anay Ailirpa", "Pemrograman Web 2"); //instansiasi class Dosen
echo $dosen1->aksesFitur(). "<br>";

$mahasiswa1 = new Mahasiswa("Yana Aprilia", "230202047", "Komputer dan Bisnis"); //instansiasi class Mahasiswa
echo $mahasiswa1->aksesFitur();
?>
```
Berikut adalah hasil output dari kode pemrograman di atas.
![image](https://github.com/user-attachments/assets/213e184e-f0ca-4db6-9165-72d530210926)

### 5. Abstraction
Saya menerapkan **Abstraction** dengan membuat class abstrak **Pengguna** yang memiliki metode abstrak **aksesFitur()**. Class Mahasiswa dan Dosen mengimplementasikan metode abstrak ini dengan cara mereka sendiri. Saya mendemonstrasikan abstraksi ini dengan memanggil metode aksesFitur() dari objek yang diinstansiasi dari class Mahasiswa dan Dosen.

```php
<?php
abstract class Pengguna { //membuat class abstrak Pengguna
    public $nama; //menambah atribut nama dengan akses publik

    public function __construct($nama) { //inisialisi class Pengguna
        $this->nama = $nama;
    }

    abstract public function aksesFitur(); //metode abstrak aksesFitur
}

class Dosen extends Pengguna{ //membuat class Dosen
    private $mataKuliah; //menambah atribut mataKuliah dengan akses privat

    public function __construct($nama, $mataKuliah) { //inisialisi class Dosen
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function aksesFitur() { //metode aksesFitur
        return "Dosen: ". $this->nama. "<br> Mata Kuliah: ". $this->mataKuliah. "<br>";
    }
}

class Mahasiswa extends Pengguna{ //membuat class Mahasiswa
    private $nim, $jurusan; //mengubah atribut nama, nim, dan jurusan menjadi akses privat

    public function __construct($nama, $nim, $jurusan) { //inisilasi class Mahasiswa
        parent::__construct($nama);
        $this->nim = $nim; $this->jurusan = $jurusan;
    }

    public function aksesFitur() { //metode aksesFitur
        return "Mahasiswa: ". $this->nama. "<br> NIM: ". $this->nim. "<br> Jurusan: ". $this->jurusan. "<br>";
    }
}
echo "<p><b>5. Abstraction</b></p>";

$dosen1 = new Dosen("Anay Ailirpa", "Pemrograman Web 2"); //instansiasi class Dosen
echo $dosen1->aksesFitur(). "<br>";

$mahasiswa1 = new Mahasiswa("Yana Aprilia", "230202047", "Komputer dan Bisnis"); //instansiasi class Mahasiswa
echo $mahasiswa1->aksesFitur();
?>
```
Berikut adalah hasil output dari kode pemrograman di atas.
![image](https://github.com/user-attachments/assets/7b1a76d9-b2fe-4b24-b4e4-5695573eea68)

## Kesimpulan
Tugas ini berhasil mengimplementasikan prinsip-prinsip OOP, yaitu Encapsulation, Inheritance, Polymorphism, dan Abstraction dalam PHP. Konsep dasar OOP membantu dalam merancang kode yang modular, mudah dipelihara, dan reusable. Dengan memecah program menjadi objek dan memanfaatkan konsep-konsep ini, kode menjadi lebih terstruktur dan lebih mudah untuk dikembangkan dan dikelola.
