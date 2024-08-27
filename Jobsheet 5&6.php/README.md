# Jobsheet pertemuan 5 dan 6
Object-Oriented Programming (OOP) dalam PHP memungkinkan pengembangan
perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti Inheritance,
Polymorphism, Encapsulation, dan Abstraction adalah pilar penting yang membuat
OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode
yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara.

# Inheritance
ode ini mendemonstrasikan penggunaan konsep kelas dan pewarisan dalam PHP. Terdapat dua kelas, `Person` dan `Student`, di mana `Student` mewarisi dari `Person` dan menambahkan atribut serta metode tambahan.

## **Structur kode**
### Kelas Person
**Atribut**:

- **protected $name**: Atribut yang menyimpan nama dan hanya dapat diakses oleh kelas Person dan kelas turunannya.

**Metode:**
- **__construct($name)**: Konstruktor untuk menginisialisasi atribut `name` dengan nilai yang diberikan.
- **setName($Name)**: Metode untuk mengubah nilai atribut `name`.
- **getName()**: Metode untuk mendapatkan nilai atribut `name`.
### Kelas Student
- **Mewarisi**: Kelas ini mewarisi dari kelas `Person`.

**Atribut**:

- **private $studentID**: Atribut yang menyimpan ID mahasiswa dan hanya dapat diakses di dalam kelas `Student`.
**Metode:**

- **__construct($Name, $studentID)**: Konstruktor untuk menginisialisasi atribut `name` (menggunakan metode `setName` dari kelas induk) dan `studentID`.
- **getStudentID()**: Metode untuk mendapatkan nilai atribut `studentID`.


## Kodingan
```php
<?php
// Membuat class Person dengan atribut name dan metode getName().
class person {
    // Deklarasi atribut 'name' dengan akses protected, yang berarti bisa diakses oleh kelas ini dan kelas turunannya.
    protected $name;

    // Konstruktor untuk menginisialisasi atribut 'name' saat objek dari kelas Person dibuat.
    public function __construct($name) {
        $this->name = $name; // Menginisialisasi atribut 'name' dengan nilai yang diberikan sebagai parameter.
    }

    // Metode untuk mengubah nilai atribut 'name'.
    public function setName($Name){
        $this->name = $Name; // Mengatur nilai atribut 'name' dengan nilai yang diberikan sebagai parameter.
    }

    // Metode untuk mendapatkan nilai atribut 'name'.
    public function getName() {
        return $this->name; // Mengembalikan nilai dari atribut 'name'.
    }
}

// Membuat class Student yang mewarisi dari Person dan menambahkan atribut studentID serta metode getStudentID.
class student extends person {
    // Deklarasi atribut 'studentID' dengan akses private, yang berarti hanya bisa diakses di dalam kelas Student itu sendiri.
    private $studentID;

    // Konstruktor untuk menginisialisasi atribut 'name' dan 'studentID' saat objek dari kelas Student dibuat.
    public function __construct($Name, $studentID){
        parent::setName($Name); // Memanggil metode setName dari kelas induk (Person) untuk menginisialisasi atribut 'name'.
        $this->studentID = $studentID; // Menginisialisasi atribut 'studentID' dengan nilai yang diberikan sebagai parameter.
    }
    
    // Metode untuk mendapatkan nilai atribut 'studentID'.
    public function getStudentID() {
        return "$this->studentID"; // Mengembalikan nilai dari atribut 'studentID'.
    }
}

// Membuat objek dari kelas Person dengan nama "Asep".
$person = new person("Asep");

// Membuat objek dari kelas Student dengan nama "Rifandi" dan studentID 12345.
$student = new student("Rifandi", 12345);

// Menampilkan nama dari objek Person dan studentID dari objek Student.
echo $person->getName() . " sayang " . $student->getStudentID(); // Output: Asep sayang 12345
```

## Hasil koding
```bash
Asep sayang 12345
```
# Polymorphism
Kode ini mendemonstrasikan penggunaan konsep pewarisan (inheritance) dan overriding metode dalam PHP dengan membuat tiga kelas: ` Person` , `Student` , dan `Teacher`.

### Kelas Person
- Kelas ini mengelola atribut `name` dan menyediakan metode untuk mengatur serta mendapatkan nama.

### Atribut

- **name (string)**: Nama orang.

### Metode

- **setName($name)**: Mengatur nama.
- **getName()**: Mengambil nama.

### Kelas Student

- Kelas ini mewarisi dari `Person` dan menambahkan atribut `studentID` serta metode untuk mendapatkan ID mahasiswa.

### Atribut

- **studentID (string)**: ID mahasiswa.

### Metode

- **setStudentID($id)**: Mengatur ID mahasiswa.
- **getStudentID()**: Mengambil ID mahasiswa.

### Kelas Teacher

- Kelas ini mewarisi dari `Person` dan meng-override metode `getName()` untuk menambahkan teks tambahan pada nama.

### Metode

- **getName()**: Mengambil nama dan menambahkan teks tambahan (misalnya, "Professor").

## Instansiasi dan Panggilan Metode

- Objek dari kelas `Person`, `Student`, dan `Teacher` dibuat, dan metode `getName()` serta `getStudentID()` dipanggil untuk menampilkan hasil.

## Kodingan
```php
<?php
// Buat class Person dengan atribut name dan metode getName().
class person {
    protected $name;  // Mendeklarasikan atribut 'name' yang bersifat protected, sehingga bisa diakses oleh kelas turunan.
    
    // Konstruktor untuk menginisialisasi atribut 'name' saat objek dari kelas Person dibuat.
    public function __construct($name) {
        $this->name = $name;
    }

    // Fungsi untuk mengubah nilai atribut 'name'.
    public function setName($Name){
        $this->name = $Name;
    }

    // Fungsi untuk mengembalikan nilai atribut 'name'.
    public function getName() {
        return $this->name;
    }
}

// Buat class Student yang mewarisi dari Person dan tambahkan atribut studentID serta metode getStudentID().
class student extends person {
    private $studentID;  // Mendeklarasikan atribut 'studentID' yang bersifat private, hanya bisa diakses di dalam kelas Student itu sendiri.

    // Konstruktor untuk menginisialisasi atribut 'name' dan 'studentID' saat objek dari kelas Student dibuat.
    public function __construct($Name, $studentID){
        parent::setName($Name);  // Memanggil metode setName dari kelas induk (Person) untuk menginisialisasi 'name'.
        $this->studentID = $studentID;  // Menginisialisasi atribut 'studentID' dengan nilai yang diberikan.
    }
    
    // Fungsi untuk mengembalikan nilai atribut 'studentID'.
    public function getStudentID() {
        return "$this->studentID";
    }
}

// Buat class Teacher yang juga mewarisi dari Person dan menambahkan atribut teacherID.
class Teacher extends person {
    private $teacherID;  // Mendeklarasikan atribut 'teacherID' yang bersifat private.

    // Konstruktor untuk menginisialisasi atribut 'name' saat objek dari kelas Teacher dibuat.
    public function __construct($name){
        parent::setName($name);  // Memanggil metode setName dari kelas induk (Person) untuk menginisialisasi 'name'.
    }

    // Overriding fungsi getName() dari kelas Person untuk memberikan nilai tambahan " SAYANG ASEP " pada output.
    public function getName(){
        return parent::getName() . " SAYANG ASEP ";
    }
}

// Membuat objek dari kelas Person dengan nama "Asep".
$person = new person("Asep");

// Membuat objek dari kelas Student dengan nama "Rifandi" dan studentID 12345.
$student = new student("Rifandi", 12345);

// Menampilkan nama dari objek Person dan studentID dari objek Student.
echo $person->getName() . " sayang " . $student->getStudentID(); // Output: Asep sayang 12345

echo "<br>";

// Membuat objek dari kelas Teacher dengan nama "Muhammad Rifandi".
$teacher = new Teacher("Muhammad Rifandi");

// Menampilkan nama dari objek Teacher yang sudah ditambahkan dengan " SAYANG ASEP ".
echo $teacher->getName();
```

## Hasil koding
```bash
Asep sayang 12345
Muhammad Rifandi SAYANG ASEP
```
# Encapsulation
Dokumentasi ini menjelaskan implementasi kelas `Person`, `Student`, dan `Teacher` dalam PHP. Kode ini menunjukkan konsep pewarisan, enkapsulasi, dan overriding metode.

### Kelas Person

### Atribut

- **private $name**: Atribut yang menyimpan nama, bersifat private dan hanya dapat diakses di dalam kelas ini.

### Metode

- **__construct($name)**: Konstruktor untuk menginisialisasi atribut `name` saat objek dari kelas `Person` dibuat.
- **setName($name)**: Metode untuk mengubah nilai atribut `name`.
- **getName()**: Metode untuk mendapatkan nilai atribut `name`.

### Kelas Student

### Mewarisi

- Kelas ini mewarisi dari kelas `Person`.

### Atribut

- **private $studentID**: Atribut untuk menyimpan ID mahasiswa, bersifat private dan hanya dapat diakses di dalam kelas ini.

### Metode

- **__construct($name, $studentID)**: Konstruktor untuk menginisialisasi atribut `name` dan `studentID`.
- **getStudentID()**: Metode untuk mendapatkan nilai atribut `studentID`.
- **setStudentID($id)**: Metode untuk mengubah nilai atribut `studentID`.
- **setName($name)**: Override metode `setName` dari kelas induk `Person`.
- **getName()**: Override metode `getName` dari kelas induk `Person`.

### Kelas Teacher

### Mewarisi

- Kelas ini mewarisi dari kelas Person.

### Atribut

- **private $teacherID**: Atribut untuk menyimpan ID pengajar, bersifat private.

### Metode

- **__construct($name)**: Konstruktor untuk menginisialisasi atribut `name`.
- **getName()**: Override metode `getName` dari kelas induk `Person` untuk menambahkan teks " okeeee ".

## Kodingan
```php
<?php
// Buat class Person dengan atribut name dan metode getName().
class person {
    private $name;  // Mendeklarasikan atribut 'name' yang bersifat protected, sehingga bisa diakses oleh kelas turunan.
    
    // Konstruktor untuk menginisialisasi atribut 'name' saat objek dari kelas Person dibuat.
    public function __construct($name) {
        $this->name = $name;
    }

    // Fungsi untuk mengubah nilai atribut 'name'.
    public function setName($Name){
        $this->name = $Name;
    }

    // Fungsi untuk mengembalikan nilai atribut 'name'.
    public function getName() {
        return $this->name;
    }
}

// Buat class Student yang mewarisi dari Person dan tambahkan atribut studentID serta metode getStudentID().
class student extends person {
    private $studentID;  // Mendeklarasikan atribut 'studentID' yang bersifat private, hanya bisa diakses di dalam kelas Student itu sendiri.

    // Konstruktor untuk menginisialisasi atribut 'name' dan 'studentID' saat objek dari kelas Student dibuat.
    public function __construct($Name, $studentID){
        parent::setName($Name);  // Memanggil metode setName dari kelas induk (Person) untuk menginisialisasi 'name'.
        $this->studentID = $studentID;  // Menginisialisasi atribut 'studentID' dengan nilai yang diberikan.
    }
    
    // Fungsi untuk mengembalikan nilai atribut 'studentID'.
    public function getStudentID() {
        return "$this->studentID";
    }

    public function setStudentID($id){
        $this->studentID = $id;

    }

    public function setName($name){
        parent::setName($name);
    }
    
    public function getName(){
        parent::getName();
    }

}

// Buat class Teacher yang juga mewarisi dari Person dan menambahkan atribut teacherID.
class Teacher extends person {
    private $teacherID;  // Mendeklarasikan atribut 'teacherID' yang bersifat private.

    // Konstruktor untuk menginisialisasi atribut 'name' saat objek dari kelas Teacher dibuat.
    public function __construct($name){
        parent::setName($name);  // Memanggil metode setName dari kelas induk (Person) untuk menginisialisasi 'name'.
    }

    // Overriding fungsi getName() dari kelas Person untuk memberikan nilai tambahan " SAYANG ASEP " pada output.
    public function getName(){
        return parent::getName() . " okeeee ";
    }
}

// Membuat objek dari kelas Person dengan nama "Asep".
$person = new person("Abi");

// Membuat objek dari kelas Student dengan nama "Rifandi" dan studentID 12345.
$student = new student("Rifandi", 12345);

// Menampilkan nama dari objek Person dan studentID dari objek Student.
echo $person->getName() . " Yasa " . $student->getStudentID(); // Output: Abi Yasa 12345

echo "<br>";
// Menampilkan nama dari objek Person dan studentID dari objek Student.
$student->setName("okeeee");
$student->setStudentID(54321); // Output: Abi Yasa 12345

echo "<br>";

echo $student->getName() . " Yasa " . $student->getStudentID(); // Output: Abi Yasa 12345
// Membuat objek dari kelas Teacher dengan nama "Muhammad Rifandi".
$teacher = new Teacher("Muhammad Rifandi");

echo "<br>";
// Menampilkan nama dari objek Teacher yang sudah ditambahkan dengan " okeee ".
echo $teacher->getName();

```

## Hasil koding
```bash
Abi Yasa 12345
okee Yasa 54321
Muhammad Rifandi okeeee
```
# Abstraction
Dokumentasi ini menjelaskan implementasi kelas abstrak `Course` dan kelas-kelas turunannya `OnlineCourse` dan `OfflineCourse` dalam PHP. Kode ini menunjukkan penggunaan kelas abstrak, pewarisan, dan implementasi metode abstrak.

## Struktur Kode

### Kelas Course

Kelas `Course` adalah kelas abstrak yang mendefinisikan struktur dasar untuk mata kuliah. 

### Atribut

- **protected $matkul**: Menyimpan nama mata kuliah, dapat diakses oleh kelas ini dan kelas turunannya.
- **protected $code**: Menyimpan kode mata kuliah, dapat diakses oleh kelas ini dan kelas turunannya.

### Metode

- **__construct($matkul, $code)**: Konstruktor untuk menginisialisasi atribut `matkul` dan `code`.
- **abstract public function getCourseDetails()**: Metode abstrak yang harus diimplementasikan oleh kelas turunan untuk mengembalikan detail kursus.

### Kelas OnlineCourse

Kelas ini mewarisi dari `Course` dan menambahkan fitur spesifik untuk kursus online.

### Atribut

- **private $aplikasi**: Menyimpan nama aplikasi yang digunakan untuk kursus online, bersifat private.

### Metode

- **__construct($matkul, $code, $aplikasi)**: Konstruktor untuk menginisialisasi atribut `matkul`, `code`, dan `aplikasi`.
- **public function getCourseDetails()**: Implementasi metode abstrak dari kelas `Course` untuk mengembalikan detail kursus online.

### Kelas OfflineCourse

Kelas ini mewarisi dari `Course` dan menambahkan fitur spesifik untuk kursus offline.

### Atribut

- **private $lokasi**: Menyimpan lokasi kursus offline, bersifat private.

### Metode

- **__construct($matkul, $code, $lokasi)**: Konstruktor untuk menginisialisasi atribut `matkul`, `code`, dan `lokasi`.
- **public function getCourseDetails()**: Implementasi metode abstrak dari kelas `Course` untuk mengembalikan detail kursus offline.

## Kodingan
```php
<?php
// Definisi Kelas Abstrak Course
abstract class Course {
    // Atribut umum untuk semua jenis kursus
    protected $matkul;  // Atribut protected yang menyimpan nama mata kuliah
    protected $code;    // Atribut protected yang menyimpan kode mata kuliah

    // Constructor untuk menginisialisasi atribut matkul dan code
    public function __construct($matkul, $code) {
        $this->matkul = $matkul;  // Inisialisasi atribut 'matkul' dengan nilai yang diberikan
        $this->code = $code;      // Inisialisasi atribut 'code' dengan nilai yang diberikan
    }

    // Metode abstrak untuk mendapatkan detail kursus
    abstract public function getCourseDetails();
    // Metode ini harus diimplementasikan oleh kelas turunan dari Course
}

// Definisi Kelas OnlineCourse yang mewarisi dari Course
class OnlineCourse extends Course {
    // Atribut tambahan khusus untuk kursus online
    private $aplikasi;  // Atribut private yang menyimpan nama aplikasi yang digunakan untuk kursus online

    // Constructor untuk menginisialisasi atribut matkul, code, dan aplikasi
    public function __construct($matkul, $code, $aplikasi) {
        parent::__construct($matkul, $code);  // Memanggil constructor dari kelas induk (Course) untuk menginisialisasi matkul dan code
        $this->aplikasi = $aplikasi;          // Inisialisasi atribut 'aplikasi' dengan nilai yang diberikan
    }

    // Implementasi metode abstrak getCourseDetails()
    public function getCourseDetails() {
        // Mengembalikan string yang berisi detail kursus online
        return "Online Course: {$this->matkul} (code: {$this->code}), aplikasi: {$this->aplikasi}";
    }
}

// Definisi Kelas OfflineCourse yang mewarisi dari Course
class OfflineCourse extends Course {
    // Atribut tambahan khusus untuk kursus offline
    private $lokasi;  // Atribut private yang menyimpan lokasi kursus offline

    // Constructor untuk menginisialisasi atribut matkul, code, dan lokasi
    public function __construct($matkul, $code, $lokasi) {
        parent::__construct($matkul, $code);  // Memanggil constructor dari kelas induk (Course) untuk menginisialisasi matkul dan code
        $this->lokasi = $lokasi;              // Inisialisasi atribut 'lokasi' dengan nilai yang diberikan
    }

    // Implementasi metode abstrak getCourseDetails()
    public function getCourseDetails() {
        // Mengembalikan string yang berisi detail kursus offline
        return "Offline Course: {$this->matkul} (code: {$this->code}), lokasi: {$this->lokasi}";
    }
}

// Contoh penggunaan
$onlineCourse = new OnlineCourse("PWEB2", "11111", "ZOOM");  
// Membuat objek dari kelas OnlineCourse dengan mata kuliah "PWEB2", kode "11111", dan aplikasi "ZOOM"

$offlineCourse = new OfflineCourse("Rekayasa Perangkat Lunak", "RPL", "Lab Jaringan, Lantai 4, Gedung GTIL");
// Membuat objek dari kelas OfflineCourse dengan mata kuliah "Rekayasa Perangkat Lunak", kode "RPL", dan lokasi "Lab Jaringan, Lantai 4, Gedung GTIL"

// Menampilkan detail kursus online
echo $onlineCourse->getCourseDetails() . "<br>";
// Output: Online Course: PWEB2 (code: 11111), aplikasi: ZOOM

// Menampilkan detail kursus offline
echo $offlineCourse->getCourseDetails();
// Output: Offline Course: Rekayasa Perangkat Lunak (code: RPL), lokasi: Lab Jaringan, Lantai 4, Gedung GTIL
?>
```

## Hasil koding
```bash
Online Course: PWEB2 (code: 11111), aplikasi: ZOOM
Offline Course: Rekayasa Perangkat Lunak (code: RPL), lokasi: Lab Jaringan, Lantai 4, Gedung GTIL
```



## License
Sekian terimakasih berikut adalah penjelasan terkait modul 3  
[MIT](https://choosealicense.com/licenses/mit/)