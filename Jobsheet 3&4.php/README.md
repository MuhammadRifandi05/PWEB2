# Jobsheet pertemuan 3 dan 4
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang
berfokus pada konsep objek. Dalam OOP, konsep dasar seperti class dan object

digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsip-
prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan

Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah
dipelihara.

# Class dan Object
Kode ini menunjukkan cara membuat dan menggunakan kelas `Mahasiswa` dalam PHP, termasuk bagaimana mendefinisikan atribut, konstruktor, dan metode untuk menampilkan data mahasiswa.
### **Fitur Utama**
- **Atribut Publik**: Kelas `Mahasiswa` memiliki tiga atribut publik, yaitu `Nama`, `Nim`, dan `Jurusan`.
- **Konstruktor**: Konstruktor digunakan untuk menginisialisasi atribut-atribut ketika objek dari kelas `Mahasiswa` dibuat.
- **Metode tampilkanData()**: Metode ini mengembalikan informasi mahasiswa dalam bentuk string.


## Kodingan
```php
<?php
// Definisi Class
class Mahasiswa{
    // atribut atau properties
    public $Nama;
    public $Nim;
    public $Jurusan;

    // Constructor
    public function __construct($Nama, $Nim, $Jurusan) {
        $this->Nama = $Nama;
        $this->Nim = $Nim;
        $this->Jurusan = $Jurusan;
    }

    //Metode atau Function
    public function tampilkanData(){
        return "Nama: $this->Nama,Nim: $this->Nim, Jurusan: $this->Jurusan";
    }
}
// Instansiasi Objek
$Mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
echo $Mahasiswa1->tampilkanData();
?>
```

## Hasil koding
```bash
Nama: Muhammad Rifandi, Nim: 230102019, Jurusan: Teknik Informatika
```
# Encapsulation
Kode ini mendemonstrasikan cara mengimplementasikan kelas `Mahasiswa` dengan atribut yang bersifat privat, serta metode getter dan setter untuk mengakses dan mengubah nilai atribut tersebut.

### **Fitur Utama**
- **Atribut Privat**: atribut `Nama`, `Nim`, dan `Jurusan`bersifat privat, sehingga tidak bisa diakses langsung dari luar kelas..
- **Konstruktor**: Konstruktor digunakan untuk menginisialisasi atribut-atribut ketika objek dari kelas `Mahasiswa` dibuat.
- **Metode Getter dan Setter**: Setiap atribut memiliki metode getter untuk mengambil nilai dan setter untuk mengubah nilai.

## Kodingan
```php
<?php
// Ubah atribut dalam class Mahasiswa menjadi private.
class Mahasiswa {
    private $Nama;
    private $Nim;
    private $Jurusan;

    public function __construct($Nama, $Nim, $Jurusan) {
        $this->Nama = $Nama;
        $this->Nim = $Nim;
        $this->Jurusan = $Jurusan;
    }
    //Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
    public function getNama(){
        return $this->Nama;
    }
 
    public function setNama($Nama){
        $this->Nama = $Nama;
    }

    public function getNim(){
        return $this->Nim;
    }

    public function setNim($Nim){
        $this->Nim = $Nim;
    }

    public function getJurusan(){
        return $this->Jurusan;
    }
    
    public function setJurusan($Jurusan){
        $this->Jurusan = $Jurusan;
    }
}
// Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
$Mahasiswa = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
echo $Mahasiswa->getNama();
echo $Mahasiswa->getNim();
echo $Mahasiswa->getJurusan();
?>
```

## Hasil koding
```bash
Muhammad Rifandi 230102019 Teknik Informatika
```
# Inheritance
Kode ini mendemonstrasikan konsep pewarisan (inheritance) dalam PHP dengan membuat kelas `Pengguna` dan kelas `Dosen` yang mewarisi kelas `Pengguna`.

### **Fitur Utama**
- **Kelas Pengguna**:Kelas dasar yang memiliki atribut `nama` dan metode `getNama()` untuk mengambil nilai atribut `nama`.
- **Kelas Dosen**: elas ini mewarisi `Pengguna` dan menambahkan atribut baru, yaitu `Matakuliah`, serta metode `getMatakuliah()` untuk mengambil nilai atribut `Matakuliah`.
- **Pewarisan**: Pewarisan: Kelas `Dosen` menggunakan konsep pewarisan untuk mewarisi atribut dan metode dari kelas `Pengguna`.

## Kodingan
```php
<?php
// Buat class Pengguna dengan atribut nama dan metode getNama().
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}
// Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
class Dosen extends Pengguna {
    private $Matakuliah;

    public function __construct($nama, $Matakuliah) {
        parent::__construct($nama);
        $this->Matakuliah = $Matakuliah;
    }

    public function getMatakuliah() {
        return $this->Matakuliah;
    }
}
// Instansiasi objek dari class Dosen dan tampilkan data dosen.
$Dosen = new Dosen("Pak Abdau", "PWEB2");
echo $Dosen->getNama();
echo $Dosen->getMatakuliah() // Output: Pemrograman PHP
?>
```

## Hasil koding
```bash
Pak Abdau PWEB2
```
# Polymorphism
Kode ini mendemonstrasikan konsep polimorfisme dalam PHP dengan membuat kelas `Pengguna`, `Dosen`, dan `Mahasiswa`, di mana masing-masing kelas mengimplementasikan metode `aksesFitur()` dengan cara yang berbeda.

### **Fitur Utama**
- **Kelas Pengguna**: Kelas dasar yang memiliki metode `aksesFitur()`, yang dapat diakses oleh kelas turunan.
- **Kelas Dosen dan Mahasiswa**: Kedua kelas ini mewarisi kelas Pengguna dan mengimplementasikan ulang metode `aksesFitur()` sesuai dengan kebutuhan masing-masing.
- **Polimorfisme**: Setiap kelas (`Dosen`, `Mahasiswa`, dan `Pengguna`) memiliki cara berbeda dalam mengimplementasikan metode `aksesFitur()`.


## Kodingan
```php
<?php
// Buat class Pengguna dengan metode aksesFitur().
class Pengguna {

    public function __construct() {
    }
    
    public function aksesFitur() {
        return "aksesFitur";
    }
}

// Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa.
class Dosen extends Pengguna {
    public function __construct() {
    }
    
    public function aksesFitur() {
        return "aksesDosen";
    }
}
class Mahasiswa extends Pengguna {
    public function __construct() {
    }
    
    public function aksesFitur() {
        return "aksesMahasiswa";
    }
}

//Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
$aksesPengguna= new Pengguna();
$aksesDosen= new Dosen();
$aksesMahasiswa= new Mahasiswa();
echo $aksesPengguna->aksesFitur(). "<br>";
echo $aksesDosen->aksesFitur(). "<br>";
echo $aksesMahasiswa->aksesFitur(). "<br>";
?>
```

## Hasil koding
```bash
aksesFitur
aksesDosen
aksesMahasiswa
```
# Abstraction
Kode ini mendemonstrasikan penggunaan kelas abstrak dalam PHP dengan membuat kelas `Pengguna` yang bersifat abstrak dan memiliki metode abstrak `aksesFitur()`. Kelas `Dosen` dan `Mahasiswa` mewarisi kelas `Pengguna` dan mengimplementasikan metode `aksesFitur()` dengan cara yang berbeda.

### **Fitur Utama**
- **Kelas Abstrak Pengguna**: Kelas ini memiliki metode abstrak `aksesFitur()` yang harus diimplementasikan oleh kelas turunannya.
- **Kelas Dosen dan Mahasiswa**: Kelas-kelas ini mewarisi kelas `Pengguna` dan memberikan implementasi konkret untuk metode `aksesFitur()`.



## Kodingan
```php
<?php
// Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
abstract class Pengguna {

    public function __construct() {
    }
    
    abstract public function aksesFitur();

}

// Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa.
class Dosen extends Pengguna {
    public function __construct() {
    }
    
    public function aksesFitur() {
        return "aksesDosen";
    }
}
class Mahasiswa extends Pengguna {
    public function __construct() {
    }
    
    public function aksesFitur() {
        return "aksesMahasiswa";
    }
}

$aksesDosen= new Dosen();
$aksesMahasiswa= new Mahasiswa();
echo $aksesDosen->aksesFitur(). "<br>";
echo $aksesMahasiswa->aksesFitur(). "<br>";
?>
```

## Hasil koding
```bash
aksesDosen
aksesMahasiswa
```

## License
Sekian terimakasih berikut adalah penjelasan terkait modul 1  
[MIT](https://choosealicense.com/licenses/mit/)