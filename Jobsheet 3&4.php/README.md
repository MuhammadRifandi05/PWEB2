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
Muhammad Rifandi 230102019 Teknik Informatika
```
# Encapsulation
Kode ini mendemonstrasikan cara mengimplementasikan kelas Mahasiswa dengan atribut yang bersifat privat, serta metode getter dan setter untuk mengakses dan mengubah nilai atribut tersebut.

### **Fitur Utama**
- **Atribut Privat**: atribut Nama, Nim, dan `Jurusan`bersifat privat, sehingga tidak bisa diakses langsung dari luar kelas..
- **Konstruktor**: Konstruktor digunakan untuk menginisialisasi atribut-atribut ketika objek dari kelas Mahasiswa dibuat.
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
// Kelas dasar Pengguna
class Pengguna {
    // Atribut yang bisa diakses oleh kelas turunan
    protected $nama;

    // Konstruktor untuk menginisialisasi atribut
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Getter untuk nama
    public function getNama() {
        return $this->nama;
    }
}

// Kelas Dosen yang mewarisi dari Pengguna
class Dosen extends Pengguna {
    // Atribut tambahan untuk Dosen
    private $matakuliah;

    // Konstruktor untuk menginisialisasi atribut dari kelas dasar dan atribut tambahan
    public function __construct($nama, $matakuliah) {
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }

    // Getter untuk matakuliah
    public function getMatakuliah() {
        return $this->matakuliah;
    }
}

// Instansiasi objek dari kelas Dosen
$dosen = new Dosen("Pak Abdau", "PWEB2");
// Menampilkan nama dan mata kuliah dosen
echo $dosen->getNama() . " ";
echo $dosen->getMatakuliah();
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
// Kelas dasar Pengguna dengan metode aksesFitur
class Pengguna {
    public function aksesFitur() {
        return "aksesFitur";
    }
}

// Kelas Dosen yang mewarisi dan mengubah implementasi metode aksesFitur
class Dosen extends Pengguna {
    public function aksesFitur() {
        return "aksesDosen";
    }
}

// Kelas Mahasiswa yang mewarisi dan mengubah implementasi metode aksesFitur
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        return "aksesMahasiswa";
    }
}

// Instansiasi objek dari masing-masing kelas
$pengguna = new Pengguna();
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();

// Menampilkan hasil dari metode aksesFitur() masing-masing objek
echo $pengguna->aksesFitur() . "<br>";
echo $dosen->aksesFitur() . "<br>";
echo $mahasiswa->aksesFitur() . "<br>";
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
// Kelas abstrak Pengguna dengan metode abstrak aksesFitur
abstract class Pengguna {
    abstract public function aksesFitur();
}

// Kelas Dosen yang mengimplementasikan metode abstrak aksesFitur
class Dosen extends Pengguna {
    public function aksesFitur() {
        return "aksesDosen";
    }
}

// Kelas Mahasiswa yang mengimplementasikan metode abstrak aksesFitur
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        return "aksesMahasiswa";
    }
}

// Instansiasi objek dari masing-masing kelas
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();

// Menampilkan hasil dari metode aksesFitur() masing-masing objek
echo $dosen->aksesFitur() . "<br>";
echo $mahasiswa->aksesFitur() . "<br>";
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