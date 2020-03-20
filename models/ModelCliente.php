<?php 
  class ModelCliente {
    var $resultado;

    public function index() {
      require_once('db/DataBase.php');
      $Oconn = new DataBase();
      $Oconn -> openConnect();
      $conn = $Oconn -> getConn();
      $sql = 'SELECT * FROM clientes';
      $this -> resultado = $conn -> query($sql);
    }

    public function getConsulta() {
      return $this -> resultado;
    }
  }
?>