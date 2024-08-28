<?php 
include "koneksi.php";
class Reports extends Database{
    public function tampil_data(){
        $sql = "SELECT * FROM reports";
        $data = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
}

$reports = new Reports();
$data = $reports->tampil_data();
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="gpas.php">gpa</a>
        <a href="gpa_details.php">gpa details</a>
        <a href="reports.php">reports</a>
    </nav>
    <table border="1" cellspacing="0">
        <tr>
            <th>No</th>
            <th>id_warnings</th>
            <th>id_gpa_detail</th>
            <th>id_guidance</th>
            <th>id_achievments</th>
            <th>id_sholarship</th>
            <th>id_student_withdrawls</th>
            <th>id_tuition_areas</th>
            <th>report_date</th>
            <th>status</th>
            <th>has_acc_academic_advisor</th>
            <th>has_acc_head_of_program</th>
        </tr>
        <?php foreach ($data as $row) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['id_warnings'] ?></td>
            <td><?= $row['id_gpa_detail'] ?></td>
            <td><?= $row['id_guidance'] ?></td>
            <td><?= $row['id_achievments'] ?></td>
            <td><?= $row['id_sholarship'] ?></td>
            <td><?= $row['id_student_withdrawls'] ?></td>
            <td><?= $row['id_tuition_areas'] ?></td>
            <td><?= $row['report_date'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['has_acc_academic_advisor'] ?></td>
            <td><?= $row['has_acc_head_of_program'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>