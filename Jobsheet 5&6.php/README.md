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
// Kelas Person dengan atribut name dan metode getName().
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Kelas Student mewarisi dari Person, menambahkan atribut studentID.
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }
}

// Membuat objek dan menampilkan hasil
$person = new Person("Asep");
$student = new Student("Rifandi", 12345);

echo $person->getName() . " sayang " . $student->getStudentID();
?>
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
// Kelas Person dengan atribut name dan metode getName().
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Kelas Student mewarisi dari Person, menambahkan atribut studentID.
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }
}

// Kelas Teacher mewarisi dari Person, mengoverride metode getName().
class Teacher extends Person {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function getName() {
        return parent::getName() . " SAYANG ASEP";
    }
}

// Membuat objek dan menampilkan hasil
$person = new Person("Asep");
$student = new Student("Rifandi", 12345);
$teacher = new Teacher("Muhammad Rifandi");

echo $person->getName() . " sayang " . $student->getStudentID();
echo "<br>";
echo $teacher->getName();
?>
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
// Kelas Person dengan atribut name dan metode getName().
class Person {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Kelas Student mewarisi dari Person, menambahkan atribut studentID.
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }

    public function setStudentID($id) {
        $this->studentID = $id;
    }

    // Override metode setName dan getName
    public function setName($name) {
        parent::setName($name);
    }

    public function getName() {
        return parent::getName();
    }
}

// Kelas Teacher mewarisi dari Person, mengoverride metode getName().
class Teacher extends Person {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function getName() {
        return parent::getName() . " okeeee";
    }
}

// Membuat objek dan menampilkan hasil
$person = new Person("Abi");
$student = new Student("Rifandi", 12345);

echo $person->getName() . " Yasa " . $student->getStudentID();
echo "<br>";

$student->setName("okeeee");
$student->setStudentID(54321);

echo $student->getName() . " Yasa " . $student->getStudentID();
echo "<br>";

$teacher = new Teacher("Muhammad Rifandi");
echo $teacher->getName();
?>
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
// Kelas Abstrak Course
abstract class Course {
    protected $matkul;
    protected $code;

    public function __construct($matkul, $code) {
        $this->matkul = $matkul;
        $this->code = $code;
    }

    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mewarisi dari Course
class OnlineCourse extends Course {
    private $aplikasi;

    public function __construct($matkul, $code, $aplikasi) {
        parent::__construct($matkul, $code);
        $this->aplikasi = $aplikasi;
    }

    public function getCourseDetails() {
        return "Online Course: {$this->matkul} (code: {$this->code}), aplikasi: {$this->aplikasi}";
    }
}

// Kelas OfflineCourse yang mewarisi dari Course
class OfflineCourse extends Course {
    private $lokasi;

    public function __construct($matkul, $code, $lokasi) {
        parent::__construct($matkul, $code);
        $this->lokasi = $lokasi;
    }

    public function getCourseDetails() {
        return "Offline Course: {$this->matkul} (code: {$this->code}), lokasi: {$this->lokasi}";
    }
}

// Contoh penggunaan
$onlineCourse = new OnlineCourse("PWEB2", "11111", "ZOOM");
$offlineCourse = new OfflineCourse("Rekayasa Perangkat Lunak", "RPL", "Lab Jaringan, Lantai 4, Gedung GTIL");

echo $onlineCourse->getCourseDetails() . "<br>";
echo $offlineCourse->getCourseDetails();
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