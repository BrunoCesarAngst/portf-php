<?php 
  require_once("controllers/Controller.php");

  class ControllerSite extends Controller {
    public function home (){
      $this->template("views/pages/home.php");
    }

    public function about (){
      $this->template("views/pages/contato.php");
    }
    
    public function product (){
      $this->template("views/pages/sobre.php");
    }
    
    public function contact (){
      $this->template("views/pages/produto.php");
    }
  }
?>