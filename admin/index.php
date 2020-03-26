<?php
  session_start();
  
  if(!isset($_GET['c'])){
    require 'controller/MainController.php';
    $controller = new MainController();
    $controller->index();
  } else {
    switch($_REQUEST['c']){
      case 'm' :
        require_once('controller/MainController.php');
        $controller = new MainController();
        
        if (!isset($_GET["a"])) {
          $controller -> index();
        } else {
          switch ($_GET["a"]) {
            case 'i' : $controller -> index(); break;
            case 'l' : $controller -> login(); break;
            case 'sd' : $controller -> sessionDestroy(); break;
          }
        }
      break;
    }
  }
?>