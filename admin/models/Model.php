<?php 
    require_once('db/DataBase.php');

    class Model {
        public function __construct(){
            $this -> db = new DataBase();
        }

        public function select($sql){
                $banco = $this -> db ->ini_conn();
                
                    $resultado = $banco -> query($sql);
                $this->db -> end_conn();

                return $resultado;
        }
    }
?>