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