<?php
// Kelas Person sebagai induk dari Lecturer dan Student
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    // Metode yang akan dioverride oleh kelas turunan
    public function getRole() {
        return "Unknown Role";
    }
}

// Kelas Lecturer mewarisi Person
class Lecturer extends Person {
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Override metode getRole
    public function getRole() {
        return "Lecturer";
    }

    // Mendapatkan NIDN
    public function getNidn() {
        return $this->nidn;
    }

    // Mengatur NIDN
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}

// Kelas Student mewarisi Person
class Student extends Person {
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Override metode getRole
    public function getRole() {
        return "Student";
    }

    // Mendapatkan NIM
    public function getNim() {
        return $this->nim;
    }

    // Mengatur NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }

    // Metode abstrak untuk pengajuan jurnal
    abstract public function submit();
}

// Kelas JurnalLecturer mewarisi Jurnal
class JurnalLecturer extends Jurnal {
    public function submit() {
        return "Jurnal Lecturer '{$this->judul}' is being borrowed.";
    }
}

// Kelas JurnalStudent mewarisi Jurnal
class JurnalStudent extends Jurnal {
    public function submit() {
        return "Jurnal Student '{$this->judul}' is being borrowed.";
    }
}

// Contoh penggunaan
$lecturer = new Lecturer("Pak Abdau", "0934783");
$student = new Student("Muhammad Rifandi", "230102019");

echo $lecturer->getName() . " is a person " . $lecturer->getRole() . " with NIDN: " . $lecturer->getNidn() . "<br>";
echo $student->getName() . " is a person " . $student->getRole() . " with NIM: " . $student->getNim() . "<br>";

$jurnalLecturer = new JurnalLecturer("Programmer VS AI");
$jurnalStudent = new JurnalStudent("Tutorial OOP");

echo $jurnalLecturer->submit() . "<br>";
echo $jurnalStudent->submit() . "<br>";
?>