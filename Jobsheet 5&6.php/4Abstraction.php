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
