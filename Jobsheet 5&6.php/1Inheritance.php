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
