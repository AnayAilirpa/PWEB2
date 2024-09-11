# Pertemuan5-6

## Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP
Object-Oriented Programming (OOP) dalam PHP memungkinkan pengembangan perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti **Inheritance**, **Polymorphism**, **Encapsulation**, dan **Abstraction** adalah pilar penting yang membuat OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara.
***
### 1. Inheritance (Pewarisan) 
Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan menciptakan hubungan hierarkis antara kelas.

Contoh kode pemrograman:
```php
<?php
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

$dog = new Dog("Buddy");
echo $dog->getName(). " says ". $dog->makeSound(). "<br>"; //output: Buddy says Woof!
?>
```
Penjelasan:
Kelas `Dog` dan `Cat` mewarisi sifat `name` dari kelas `Animal` dan dapat memiliki metode tambahan `makeSound()`.

Output:

![image](https://github.com/user-attachments/assets/7bd18498-d295-4a94-aa37-76b96c914686)

### 2. Polymorphism (Polimorfisme)
Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk, biasanya melalui metode overriding di kelas turunan. Dengan ini, objek dapat diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.

Contoh kode pemrograman:
```php
<?php
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

class Printer {
    public function print(Animal $animal) {
        echo $animal->getName(). " says ". $animal->makeSound(). "<br>";
    }
}

$dog = new Dog("Buddy");
$cat = new Cat("Kitty");

$printer = new Printer();
$printer->print($dog); //output: Buddy says Woof!
$printer->print($cat); //output: Kitty says Meow!
?>
```
Penjelasan:
Metode `print()` di kelas `Printer` dapat menerima objek dari kelas `Animal` atau turunannya (`Dog` atau `Cat`), menunjukkan bagaimana metode ini bekerja secara berbeda berdasarkan objek yang diterima.

Output:

![image](https://github.com/user-attachments/assets/c53fecf1-a3b1-4883-906b-9dec0fb966f4)

### 3. Encapsulation (Enkapsulasi) 
Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal tetap aman dari perubahan tak terduga.

Contoh kode pemrograman:
```php
<?php
class BankAccount {
    private $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount(1000);
$account->deposit(500);
$account->withdraw(200);
echo "Current Balance: " . $account->getBalance(); //output: Current Balance: 1300
?>
```
Penjelasan:
Atribut `balance` di kelas `BankAccount` dienkapsulasi dengan tingkat akses private, dan interaksi hanya dilakukan melalui metode `deposit()`, `withdraw()`, dan `getBalance()`.

Output:

![image](https://github.com/user-attachments/assets/89d4f00e-b858-4721-9c98-253b94abbc9e)

### 4. Abstraction (Abstraksi) 
Abstraction adalah proses menyembunyikan detail implementasi internal dan hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai dengan menggunakan kelas abstrak atau antarmuka.
 
Contoh kode pemrograman:
```php
<?php
abstract class Shape {
    abstract public function area();
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

$rectangle = new Rectangle(5, 10);
echo "Area of Rectangle: " . $rectangle->area(); //output: Area of Rectangle: 50

$circle = new Circle(7);
echo "<br>Area of Circle: " . $circle->area(); //output: Area of Circle: 153.93804002589985
?>
```
Penjelasan:
Kelas abstrak `Shape` mendefinisikan metode `area()` yang harus diimplementasikan oleh kelas turunan seperti `Rectangle` dan `Circle`.

Output:

![image](https://github.com/user-attachments/assets/720744f9-9115-45d8-9922-b9f40455961d)






















