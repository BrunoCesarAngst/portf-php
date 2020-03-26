<?php 
  require_once("controller/Controller.php");

  class ControllerAdmin extends Controller {
    public function home (){
      $this->template("views/pages/auth/login.php");
    }
  }
?>