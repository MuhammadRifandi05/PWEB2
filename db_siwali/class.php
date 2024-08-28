<?php 
class classes extends database {
  public function __construct() {
    parent::__construct();
  }

  public function read() {
    $sql = "SELECT * FROM tb_classes"; 
  }

  public function tampilData() {
    $sql = "SELECT * FROM tb_classes"; 
    return $this->readdata($sql);
  }
}
?>