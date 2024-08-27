# Jobsheet pertemuan 1 dan 2
Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek
(OOP). Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek,
sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas
dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat
digunakan kembali.

# Implementasi Constructor
Kode ini menunjukkan cara membuat dan menggunakan kelas `Mahasiswa` dalam PHP. Kelas ini mendefinisikan atribut-atribut dasar yang biasanya dimiliki oleh seorang mahasiswa, seperti `Nama`, `Nim`, dan `Jurusan`.

### **Fitur Utama**
- **Atribut Publik**: Kelas `Mahasiswa` memiliki tiga atribut publik, yaitu `Nama`, `Nim`, dan `Jurusan`.
- **Konstruktor**: Konstruktor digunakan untuk menginisialisasi atribut-atribut ketika objek dari kelas `Mahasiswa` dibuat.
- **Metode tampilkanData()**: Metode ini mengembalikan informasi mahasiswa dalam bentuk string.


## Kodingan
```php
<?php
// Menambah Atribut CLASS
class Mahasiswa {
    // Mendeklarasikan atribut publik 'Nama', 'Nim', dan 'Jurusan' untuk menyimpan informasi mahasiswa.
    public $Nama;
    public $Nim;
    public $Jurusan;

    // Tambahkan constructor pada CLASS Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan.
    // Konstruktor ini akan dipanggil saat objek dari kelas Mahasiswa dibuat dan akan mengatur nilai awal atribut 'Nama', 'Nim', dan 'Jurusan'.
    public function __construct($Nama, $Nim, $Jurusan) {
        $this->Nama = $Nama;         // Menginisialisasi atribut 'Nama' dengan nilai yang diberikan.
        $this->Nim = $Nim;           // Menginisialisasi atribut 'Nim' dengan nilai yang diberikan.
        $this->Jurusan = $Jurusan;   // Menginisialisasi atribut 'Jurusan' dengan nilai yang diberikan.
    }

    // Buat metode tampilkanData() dalam class Mahasiswa.
    // Metode ini mengembalikan string yang berisi informasi mahasiswa seperti Nama, Nim, dan Jurusan.
    public function tampilkanData() {
        return "Mahasiswa: $this->Nama, $this->Nim, $this->Jurusan."; // Mengembalikan string berisi data mahasiswa.
    }
}

// Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
// Membuat objek dari kelas Mahasiswa dengan Nama "Muhammad Rifandi", Nim "230102019", dan Jurusan "Teknik Informatika".
$Mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");

// Menampilkan data mahasiswa yang dihasilkan oleh metode tampilkanData().
echo $Mahasiswa1->tampilkanData();
?>
```

## Hasil koding
```bash
Mahasiswa: Muhammad Rifandi, 230102019, Teknik Informatika.
```
# Membuat Class dan Object
Kode ini menunjukkan cara membuat kelas `Mahasiswa` dengan atribut dasar dan metode sederhana untuk menampilkan data mahasiswa.

### **Fitur Utama**
- **Atribut Publik**: Kelas `Mahasiswa` memiliki tiga atribut publik, yaitu `Nama`, `Nim`, dan `Jurusan`.
- **Metode tampilkanData()**: Metode ini mengembalikan informasi mahasiswa dalam bentuk string.


## Kodingan
```php
<?php
// Menambah Atribut dan Metode
class Mahasiswa {
    public $Nama;       // Deklarasi atribut 'Nama' yang bersifat public.
    public $Nim;        // Deklarasi atribut 'Nim' yang bersifat public.
    public $Jurusan;    // Deklarasi atribut 'Jurusan' yang bersifat public.

    // Buat metode tampilkanData() dalam class Mahasiswa.
    public function tampilkanData() {
        // Metode ini mengembalikan sebuah string yang berisi data dari atribut Nama, Nim, dan Jurusan.
        return "Mahasiswa: $this->Nama, $this->Nim, $this->Jurusan.";
    }
}

// Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
$Mahasiswa1 = new Mahasiswa();  // Membuat objek baru dari class Mahasiswa.
$Mahasiswa1->Nama = "Muhammad Rifandi";  // Mengisi atribut 'Nama' dengan nilai "Muhammad Rifandi".
$Mahasiswa1->Nim = "230102019";          // Mengisi atribut 'Nim' dengan nilai "230102019".
$Mahasiswa1->Jurusan = "Teknik Informatika";  // Mengisi atribut 'Jurusan' dengan nilai "Teknik Informatika".

// Menampilkan data mahasiswa menggunakan metode tampilkanData() dari objek $Mahasiswa1.
echo $Mahasiswa1->tampilkanData();  // Output: "Mahasiswa: Muhammad Rifandi, 230102019, Teknik Informatika."

```

## Hasil koding
```bash
Mahasiswa: Muhammad Rifandi, 230102019, Teknik Informatika.
```
# Membuat Metode Tambahan
Kode ini mendemonstrasikan cara membuat kelas Mahasiswa dengan atribut dasar, metode untuk menampilkan data, dan metode untuk memperbarui jurusan mahasiswa.


### **Fitur Utama**
- **Atribut Publik**: Kelas `Mahasiswa` memiliki tiga atribut publik, yaitu `Nama`, `Nim`, dan `Jurusan`.
- **Konstruktor**: Konstruktor digunakan untuk menginisialisasi atribut-atribut ketika objek dari kelas `Mahasiswa` dibuat.
- **Metode tampilkanData()**: Metode ini mengembalikan informasi mahasiswa dalam bentuk string.
- **Metode updateJurusan()**: Metode ini memungkinkan perubahan jurusan mahasiswa setelah objek dibuat.

## Kodingan
```php
<?php
// Menambah Atribut dan Metode
class Mahasiswa {
    public $Nama;       // Atribut publik 'Nama' yang dapat diakses dari luar kelas.
    public $Nim;        // Atribut publik 'Nim' yang dapat diakses dari luar kelas.
    public $Jurusan;    // Atribut publik 'Jurusan' yang dapat diakses dari luar kelas.

    // Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan.
    public function __construct($Nama, $Nim, $Jurusan) {
        $this->Nama = $Nama;           // Menginisialisasi atribut 'Nama' dengan nilai yang diberikan saat objek dibuat.
        $this->Nim = $Nim;             // Menginisialisasi atribut 'Nim' dengan nilai yang diberikan saat objek dibuat.
        $this->Jurusan = $Jurusan;     // Menginisialisasi atribut 'Jurusan' dengan nilai yang diberikan saat objek dibuat.
    }

    // Buat metode tampilkanData() dalam class Mahasiswa.
    public function tampilkanData() {
        // Mengembalikan string yang berisi informasi nama, NIM, dan jurusan mahasiswa.
        return "Mahasiswa: $this->Nama, $this->Nim, $this->Jurusan.";
    }

    // Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan perubahan jurusan.
    public function updateJurusan($Jurusan) {
        // Mengubah nilai atribut 'Jurusan' dengan nilai yang baru.
        $this->Jurusan = $Jurusan;
    }
}

// Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
$Mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");

// Memanggil metode updateJurusan() untuk mengubah jurusan mahasiswa.
$Mahasiswa1->updateJurusan("Teknik Mesin");

// Menampilkan data mahasiswa setelah perubahan jurusan.
echo $Mahasiswa1->tampilkanData();

```

## Hasil koding
```bash
Mahasiswa: Muhammad Rifandi, 230102019, Teknik Mesin.
```
# Penggunaan Atribut dan Metode
Kode ini menunjukkan cara membuat kelas `Mahasiswa` dengan atribut dasar, serta metode untuk menampilkan dan memperbarui data mahasiswa, termasuk mengubah jurusan dan NIM.

### **Fitur Utama**
### **Fitur Utama**
- **Atribut Publik**: Kelas `Mahasiswa` memiliki tiga atribut publik, yaitu `Nama`, `Nim`, dan `Jurusan`.
- **Konstruktor**: Konstruktor digunakan untuk menginisialisasi atribut-atribut ketika objek dari kelas `Mahasiswa` dibuat.
- **Metode tampilkanData()**: Metode ini mengembalikan informasi mahasiswa dalam bentuk string.
- **Metode updateJurusan()**: Metode ini memungkinkan perubahan jurusan mahasiswa setelah objek dibuat.
- **Metode setNim()**: Metode ini memungkinkan perubahan nilai NIM mahasiswa.

## Kodingan
```php
<?php
// Menambah Atribut dan Metode
class Mahasiswa {
    public $Nama;
    public $Nim;
    public $Jurusan;

//Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan.
public function __construct($Nama,$Nim,$Jurusan) {
    $this->Nama = $Nama;
    $this->Nim = $Nim;
    $this->Jurusan = $Jurusan;
}

//Buat metode tampilkanData() dalam class Mahasiswa.
public function tampilkanData() {
    return "Mahasiswa: $this->Nama, $this->Nim, $this->Jurusan.";
}

//Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan perubahan jurusan.
public function updateJurusan($Jurusan){
    $this->Jurusan = $Jurusan;
}

//Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
public function setNim($Nim){
    $this->Nim = $Nim;
}
}
//Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
$Mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
$Mahasiswa1->updateJurusan("Teknik Mesin"); //Jurusan menjadi berubah
$Mahasiswa1->setNim("12345678910"); //nilai NIM jadi rubah angkanya
echo $Mahasiswa1->tampilkanData();
?>
```

## Hasil koding
```bash
Mahasiswa: Muhammad Rifandi, 12345678910, Teknik Mesin.
```
# Tugas Kelas Dosen
Kode ini mendemonstrasikan cara membuat kelas `Dosen` dengan atribut dasar, serta metode untuk menampilkan informasi dosen.

### **Fitur Utama**
- **Atribut Publik**: Kelas `Dosen` memiliki tiga atribut publik, yaitu `Nama`, `Nip`, dan `Matakuliah`.
- **Konstruktor**: Konstruktor digunakan untuk menginisialisasi nilai atribut `Nama`, `Nip`, dan `Matakuliah` saat objek `Dosen` dibuat.
- **Metode tampilkanDosen()**: Metode ini mengembalikan informasi dosen dalam bentuk string.


## Kodingan
```php
<?php
// Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
class Dosen{
    public $Nama;
    public $Nip;
    public $Matakuliah;

//Tambahkan constructor pada kelas Mahasisw yang aakan menginisialisasi atribut nama, nim, dan jurusan.
public function __construct($Nama,$Nip,$Matakuliah) {
    $this->Nama = $Nama;
    $this->Nip = $Nip;
    $this->Matakuliah = $Matakuliah;
}

//Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.
public function tampilkanDosen() {
    return "Mahasiswa: $this->Nama, $this->Nip, $this->Matakuliah.";
}
}

$Dosen1 = new Dosen("Pak Abdau", " 12345678 ", " Pweb2 ");
echo $Dosen1->tampilkanDosen();
?>
```

## Hasil koding
```bash
Mahasiswa: Pak Abdau, 12345678, Pweb2.

```

## License
Sekian terimakasih berikut adalah penjelasan terkait modul 1  
[MIT](https://choosealicense.com/licenses/mit/)