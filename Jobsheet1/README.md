# Jobsheet1
# Implementasi Prinsip OOP dalam PHP

## Deskripsi
Tugas ini bertujuan untuk mengimplementasikan prinsip dasar Object-Oriented Programming (OOP) dalam PHP dengan menggunakan konsep Encapsulation, Inheritance, Polymorphism, dan Abstraction. Melalui tugas ini, saya telah membuat beberapa class, metode, dan objek yang menunjukkan cara kerja prinsip-prinsip OOP dalam pemrograman PHP.

## Fitur
### 1. Membuat Class dan Object
Saya telah membuat class **Mahasiswa** yang memiliki atribut `nama`, `nim`, dan `jurusan`. Class ini memiliki metode **tampilkanData()** yang berfungsi untuk menampilkan data mahasiswa tersebut. Objek dari class Mahasiswa diinstansiasi untuk menampilkan data mahasiswa.

### 2. Encapsulation
Dalam tugas ini, saya menerapkan **Encapsulation** dengan mengubah atribut dalam class Mahasiswa menjadi `private`. Untuk mengakses dan mengubah data, saya membuat metode **getter** dan **setter** untuk atribut `nama`, `nim`, dan `jurusan`. Ini mendemonstrasikan kontrol akses terhadap atribut menggunakan metode getter dan setter.

### 3. Inheritance
Saya membuat class **Pengguna** yang berisi atribut `nama` dan metode **getNama()**. Kemudian, saya membuat class **Dosen** yang mewarisi class Pengguna dan menambahkan atribut `mataKuliah`. Saya juga menginstansiasi objek dari class Dosen dan menampilkan data dosen dengan memanfaatkan inheritance.

### 4. Polymorphism
Polymorphism diimplementasikan dengan cara membuat class **Pengguna** yang memiliki metode **aksesFitur()**. Saya mengimplementasikan metode ini secara berbeda di class **Dosen** dan **Mahasiswa**. Dengan cara ini, ketika saya memanggil metode aksesFitur() dari objek dosen dan mahasiswa, mereka memberikan hasil yang berbeda sesuai dengan implementasi masing-masing.

### 5. Abstraction
Saya menerapkan **Abstraction** dengan membuat class abstrak **Pengguna** yang memiliki metode abstrak **aksesFitur()**. Class Mahasiswa dan Dosen mengimplementasikan metode abstrak ini dengan cara mereka sendiri. Saya mendemonstrasikan abstraksi ini dengan memanggil metode aksesFitur() dari objek yang diinstansiasi dari class Mahasiswa dan Dosen.

## Kesimpulan
Tugas ini berhasil mengimplementasikan prinsip-prinsip OOP, yaitu Encapsulation, Inheritance, Polymorphism, dan Abstraction dalam PHP. Dengan memecah fungsi-fungsi dan atribut menjadi class yang terpisah dan menggunakan konsep OOP, kode menjadi lebih modular, mudah dikelola, dan reusable.
