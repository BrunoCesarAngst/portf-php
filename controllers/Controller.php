<?php 
  class Controller {
    public function template ($content){
      require_once("views/templates/header.php");
      require_once($content);
      require_once("views/templates/footer.php");  
    }

    public function templateData ($content, $data){
      $data;
      require_once('views/templates/header.php');
      require_once($content);
      require_once('views/templates/footer.php');  
    }     
  }
?>