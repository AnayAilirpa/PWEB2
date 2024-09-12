# Pertemuan1-2

## Mengidentifikasi dan Menjelaskan Prinsip Dasar OOP
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang
berfokus pada konsep objek. Dalam OOP, konsep dasar seperti class dan object
digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsipprinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan
Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah
dipelihara.
***
### 1. Konsep Dasar OOP
* *Class*: Blueprint atau template untuk menciptakan objek.
* *Object*: Instance dari class yang memiliki atribut (properties) dan perilaku (methods).

Contoh kode pemrograman:
```php
<?php
//definisi class
class Buku {
    //atribut atau properties
    public $judul;
    public $penulis;

    //constructor
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    //metode atau function
    public function tampilkanInfo() {
        return "Judul: ". $this->judul. ", Penulis: ". $this->penulis;
    }
}

//instansiasi objek
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->tampilkanInfo();
?>
```

Penjelasan:
* *Class Buku*: Class ini memiliki atribut judul dan penulis, serta metode tampilkanInfo().
* *Object*: $buku1 adalah instance dari class Buku, dan data buku ditampilkan menggunakan metode tampilkanInfo().

Output: 

![image](https://github.com/user-attachments/assets/8db8c0de-c01e-4252-8f65-aebcb06c8295)

### 2. Prinsip OOP
* *Encapsulation*: Menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu.

Contoh kode pemrograman:
```php
<?php
class Buku {
    private $judul;
    private $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    
    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }
}

$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getJudul(); //output pemrograman php
?>
```
Output: 

![image](https://github.com/user-attachments/assets/d0b7c1d6-2fb0-49aa-86d0-371d9f18c59d)

* *Inheritance*: Kelas dapat mewarisi properti dan metode dari kelas lain.

Contoh kode pemrograman:
```php
<?php
class Produk {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}    

class Buku extends Produk {
    private $penulis;

    public function __construct($nama, $penulis) {
        parent::__construct($nama);
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }
}

$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getNama(); //output: Pemrograman PHP
?>
```
Output: 

![image](https://github.com/user-attachments/assets/ff00437d-90e0-4c6b-904c-0dbaf3acf016)

* *Polymorphism*: Metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.

Contoh kode pemrograman:
```php
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
```
Output:

![image](https://github.com/user-attachments/assets/89f3ce65-ad49-4fd7-829c-3c08547e895e)

* *Abstraction*: Menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.

Contoh kode pemrograman:
```php
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
```
Output:

![image](https://github.com/user-attachments/assets/89a9b870-30e0-4478-a50e-abf0ccfaa613)


