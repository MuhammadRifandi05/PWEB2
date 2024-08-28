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