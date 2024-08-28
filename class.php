<?php 
class classes extends database {
  public function __construct() {
    parent::__construct();
  }

  public function read() {
    $sql = "SELECT * FROM db_siwali"; 
  }

  public function tampilData() {
    $sql = "SELECT * FROM db_siwali"; 
    return $this->readdata($sql);
  }
}
?>