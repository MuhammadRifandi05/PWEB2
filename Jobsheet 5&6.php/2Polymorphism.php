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