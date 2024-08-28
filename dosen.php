<?php 
require_once 'koneksi.php';

class lecturers extends database {

  public function __construct() {
    parent::__construct();
  }

  public function tampilData() {
    $sql = "SELECT * FROM lecturers"; 
    return $this->readdata($sql);
  }
}

$lecture = new lecturers();
$data= $lecture->tampilData();
foreach ($data as $row) {
  $no = 1;
}
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Document</title>
  </head>
  <body>
  <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">nidn</th>
                    <th scope="col">nip</th>
                    <th scope="col">nama</th>
                    <th scope="col">phone number</th>
                    <th scope="col">address</th>
                    <th scope="col">signature</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>echo $no++ ?></td>
                      <td>echo $row['nidn'] ?></td>
                      <td>echo $row['nip'] ?></td>
                      <td>echo $row['nama'] ?></td>
                      <td>echo $row['phone_number'] ?></td>
                      <td>echo $row['address'] ?></td>
                      <td>echo $row['signature'] ?></td>
  </body>
  </html>