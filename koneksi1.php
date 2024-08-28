<?php 
class Database{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "pweb2_tugas2";
    protected $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        foreach ($this->create_database() as $key) {
            mysqli_query($this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db), $key);
        }
    }

    public function create_database(){
        return 
        [
        "CREATE TABLE IF NOT EXISTS gpas (
            id_gpa INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            id_student INT(6) UNSIGNED NOT NULL,
            cumulative_gpa DECIMAL(4,2) NOT NULL
        )",
        "CREATE TABLE IF NOT EXISTS gpa_details (
            id_gpa_detail INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            id_gpa INT(6) UNSIGNED NOT NULL,
            semester INT(6) NOT NULL,
            semester_gpa DECIMAL(4,2) NOT NULL,
            FOREIGN KEY (`id_gpa`) REFERENCES `gpas`(`id_gpa`)
        )",
        "CREATE TABLE IF NOT EXISTS reports (
            id_report INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            id_warnings INT(6) UNSIGNED NOT NULL,
            id_gpa_detail INT(6) UNSIGNED NOT NULL,
            id_guidance INT(6) UNSIGNED NOT NULL,
            id_achievments INT(6) UNSIGNED NOT NULL,
            id_sholarship INT(6) UNSIGNED NOT NULL,
            id_student_withdrawls INT(6) UNSIGNED NOT NULL,
            id_tuition_areas INT(6) UNSIGNED NOT NULL,
            report_date DATE NOT NULL,
            status enum('Pending', 'Approved', 'Rejected') NOT NULL,
            has_acc_academic_advisor BOOLEAN NOT NULL,
            has_acc_head_of_program BOOLEAN NOT NULL,
            FOREIGN KEY (`id_gpa_detail`) REFERENCES `gpa_details`(`id_gpa_detail`)
        )"
        ];
    }
}
?>