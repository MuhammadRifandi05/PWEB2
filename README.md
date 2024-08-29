# README: Class Mahasiswa

## Deskripsi

Dokumen ini menjelaskan tentang class `Mahasiswa` dalam PHP. Class ini digunakan untuk merepresentasikan data mahasiswa dengan atribut tertentu dan menyediakan metode untuk mengelola data tersebut.

## 1. Class

Class `Mahasiswa` adalah blueprint untuk membuat objek mahasiswa. Di dalam class ini, kita mendefinisikan atribut yang menggambarkan data mahasiswa dan metode untuk mengakses atau memodifikasi data tersebut.

### Kode:
```php
<?php

class Mahasiswa {
    // Deklarasi atribut
    public $nama;
    public $nim;
    public $jurusan;
    public $ipk;

    // Konstruktor untuk inisialisasi atribut
    public function __construct($nama, $nim, $jurusan, $ipk) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->ipk = $ipk;
    }

    // Metode untuk menampilkan informasi mahasiswa
    public function tampilkanInfo() {
        return "Nama: $this->nama\nNIM: $this->nim\nJurusan: $this->jurusan\nIPK: $this->ipk";
    }

    // Metode untuk memperbarui IPK
    public function updateIpk($ipkBaru) {
        $this->ipk = $ipkBaru;
    }
}

?>
```
## 2. Atribut

Atribut adalah variabel yang menyimpan data terkait dengan objek dari class tersebut. Untuk class `Mahasiswa`, atribut yang umum digunakan adalah:

- **`nama`**: Nama lengkap mahasiswa.
- **`nim`**: Nomor Induk Mahasiswa.
- **`jurusan`**: Jurusan yang diambil oleh mahasiswa.
- **`ipk`**: Indeks Prestasi Kumulatif mahasiswa.

### Kode:
```php
public $nama;
public $nim;
public $jurusan;
public $ipk;
```
## 3. Metode

Metode adalah fungsi yang didefinisikan di dalam class dan digunakan untuk melakukan operasi pada data objek. Beberapa metode yang bisa digunakan untuk class `Mahasiswa` adalah:

- **`tampilkanInfo()`**: Menampilkan informasi lengkap tentang mahasiswa.
- **`updateIpk($ipkBaru)`**: Memperbarui nilai IPK mahasiswa.

### Kode:
```php
public function tampilkanInfo() {
    return "Nama: $this->nama\nNIM: $this->nim\nJurusan: $this->jurusan\nIPK: $this->ipk";
}

public function updateIpk($ipkBaru) {
    $this->ipk = $ipkBaru;
}
```
## 4. Visibility (Visibilitas)

Dalam PHP, visibility menentukan aksesibilitas dari atribut dan metode di luar class. Ada tiga jenis visibilitas yang dapat diterapkan pada atribut dan metode:

- **`public`**: Atribut atau metode yang dideklarasikan sebagai `public` dapat diakses dari mana saja, baik dari dalam maupun dari luar class.
- **`protected`**: Atribut atau metode yang dideklarasikan sebagai `protected` hanya dapat diakses dari dalam class itu sendiri atau dari class yang mewarisi class tersebut (subclass).
- **`private`**: Atribut atau metode yang dideklarasikan sebagai `private` hanya dapat diakses dari dalam class tempat atribut atau metode tersebut dideklarasikan. Akses dari luar class atau subclass tidak diperbolehkan.

### Contoh Visibilitas:
```php
<?php

class Mahasiswa {
    // Atribut dengan visibilitas public
    public $nama;

    // Atribut dengan visibilitas protected
    protected $nim;

    // Atribut dengan visibilitas private
    private $ipk;

    // Konstruktor untuk inisialisasi atribut
    public function __construct($nama, $nim, $ipk) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->ipk = $ipk;
    }

    // Metode untuk menampilkan informasi mahasiswa
    public function tampilkanInfo() {
        return "Nama: $this->nama\nNIM: $this->nim\nIPK: $this->ipk";
    }

    // Metode untuk memperbarui IPK
    public function updateIpk($ipkBaru) {
        $this->ipk = $ipkBaru;
    }
}
?>
```
## 5. Instansiasi Objek

Instansiasi objek adalah proses membuat instance baru dari class `Mahasiswa`. Berikut adalah contoh cara membuat objek `Mahasiswa` dan menggunakan metode yang ada di dalamnya.

### Kode:
```php
<?php

// Membuat objek mahasiswa
$mahasiswa1 = new Mahasiswa("Ahmad", "123456789", 3.75);

// Menampilkan informasi mahasiswa
echo $mahasiswa1->tampilkanInfo() . "\n";

// Memperbarui IPK mahasiswa
$mahasiswa1->updateIpk(3.85);

// Menampilkan informasi setelah update IPK
echo $mahasiswa1->tampilkanInfo() . "\n";
?>
````
## 6. Konstruktor (Construct)

Konstruktor adalah metode khusus dalam class yang dipanggil secara otomatis ketika sebuah objek dibuat. Fungsi utama konstruktor adalah untuk menginisialisasi atribut objek saat objek dibuat.

Dalam PHP, konstruktor dideklarasikan dengan nama metode `__construct`. Anda bisa menggunakan konstruktor untuk memberikan nilai awal pada atribut objek.

### Contoh Konstruktor:
```php
<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
    public $ipk;

    // Konstruktor untuk inisialisasi atribut
    public function __construct($nama, $nim, $jurusan, $ipk) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->ipk = $ipk;
    }

    // Metode untuk menampilkan informasi mahasiswa
    public function tampilkanInfo() {
        return "Nama: $this->nama\nNIM: $this->nim\nJurusan: $this->jurusan\nIPK: $this->ipk";
    }

    // Metode untuk memperbarui IPK
    public function updateIpk($ipkBaru) {
        $this->ipk = $ipkBaru;
    }
}
?>
```
## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
