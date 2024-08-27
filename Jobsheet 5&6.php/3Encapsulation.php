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
