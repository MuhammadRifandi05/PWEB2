<?php 
require_once 'koneksi.php';

class lecturers extends database {

  public function __construct() {
    parent::__construct();
  }

  public function tampilData() {
    $sql = "SELECT * FROM tb_dosen"; 
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
                    <th scope="col">NIDN</th>
                    <th scope="col">NAMA LENGKAP</th>
                    <th scope="col">NIP</th>
                    <th scope="col">PHONE NUMBER</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">SIGNATURE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nidn'] ?></td>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['nip'] ?></td>
                      <td><?php echo $row['phone_number'] ?></td>
                      <td><?php echo $row['address'] ?></td>
                      <td>  <?php echo $row['signature'] ?></td>
  </body>
  </html>