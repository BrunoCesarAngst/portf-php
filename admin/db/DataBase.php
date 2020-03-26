<?php
  class dataBase {
    function openConnect() {
        
      // Atributos para conexão com banco
      $servername = "localhost";
      $username = "4n657";
      $password = "4n657";
      $dbname = "lpw_Exemplo";
      $this -> conn = new mysqli($servername, $username, $password, $dbname);      
    }

    function getConn() {
      return $this -> conn;
    }
  }
?>