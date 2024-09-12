# Pertemuan3-4

## Menggunakan Konsep Kelas dan Objek dalam PHP
Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek (OOP). Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek, sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat digunakan kembali.
***

### 1. Kelas dan Objek dalam PHP 
* Kelas (*Class*)
  - Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh objek.
  - Atribut atau properties adalah variabel yang menyimpan data untuk objek.
  - Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh objek.
* Objek (*Object*)
  - Instansiasi dari kelas.
  - Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas.

Contoh kode pemrograman:
```php
<?php
//definisi kelas
class Mobil {
    //attribut atau properties
    public $merk;
    public $warna;

    //constructor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    //metode atau function
    public function deskripsi() {
        return "Mobil ini adalah $this->merk berwarna $this->warna";
    }
}

//instansiasi objek
$mobil = new Mobil("Toyota", "Hitam");
echo $mobil->deskripsi();
?>
```
Penjelasan:
- *Class* Mobil: Kelas ini memiliki dua atribut (merk dan warna) dan satu metode (deskripsi).
- *Object*: `$mobil1` adalah objek yang merupakan instance dari kelas Mobil. Metode `deskripsi()` digunakan untuk menampilkan informasi tentang objek tersebut.

Output:

![image](https://github.com/user-attachments/assets/fe30a3c4-554c-479a-a1f4-bf90c70532bc)

### 2. Atribut dan Metode
- Atribut: Menyimpan data atau keadaan dari objek.
- Metode: Operasi atau fungsi yang dilakukan oleh objek.

Contoh kode pemrograman:
```php
<?php
//menambah atribut dan metode
class Buku {
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function tampilkanInfo() {
        return "Buku: $this->judul, ditulis oleh $this->penulis.";
    }
}

$buku1 = new Buku("Pemrograman PHP", "John Doe");
echo $buku1->tampilkanInfo();
?>
```
Penjelasan:
- Aksesibilitas
  - Public: Dapat diakses dari mana saja.
  - Private: Hanya dapat diakses dalam kelas itu sendiri.
  - Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunan.

Output:

![image](https://github.com/user-attachments/assets/ded5cb0d-bd33-4b5d-8cf6-28b01f7c208e)

















