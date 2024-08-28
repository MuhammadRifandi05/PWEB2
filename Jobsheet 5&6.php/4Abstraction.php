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